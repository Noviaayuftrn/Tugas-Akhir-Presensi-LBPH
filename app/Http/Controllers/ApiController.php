<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 
use App\Models\Schedule;
use App\Models\Attendance;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{
    public function index($id = null)
    {
        $schedule_id = $id ?? Schedule::whereDate('date', now())
            ->where('teach_id', auth()->id())
            ->value('id');

        return view('attendance.capture', compact('schedule_id'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required',
                'schedule_id' => 'required|integer|exists:schedules,id',
            ]);

            $user = auth()->user();
            if ($user->role !== 'siswa') {
                throw new \Exception("Hanya siswa yang dapat melakukan presensi.");
            }

            $student = \App\Models\Student::where('user_id', $user->id)->first();
            if (!$student) {
                throw new \Exception("Data siswa tidak ditemukan.");
            }

            $expectedLabel = $student->label;

            $client = new \GuzzleHttp\Client();
            $response = $client->post('http://127.0.0.1:5000/predict', [
                'headers' => ['Content-Type' => 'application/json'],
                'json' => ['image' => $request->image],
            ]);

            $result = json_decode($response->getBody(), true);

            if (!isset($result['label'])) {
                throw new \Exception("Label tidak ditemukan dari respons Flask.");
            }

            $attendance = \App\Models\Attendance::where('user_id', $user->id)
                ->where('schedule_id', $request->schedule_id)
                ->first();

            if (!$attendance) {
                throw new \Exception("Data presensi tidak tersedia.");
            }

            if ($attendance->status !== 'alpa') {
                return response()->json([
                    'status' => 'fail',
                    'message' => 'Presensi sudah dilakukan sebelumnya.',
                ]);
            }

            // Cocokkan wajah (label dari model LBPH) dengan akun siswa login
            if ($result['label'] === $expectedLabel) {
                $attendance->status = 'hadir';
                $attendance->save();

                \Log::info('Presensi berhasil dicatat untuk: ' . $expectedLabel);

                return response()->json([
                    'status'     => 'success',
                    'student'    => $user->nama,
                    'confidence' => $result['confidence'],
                    'redirect'   => route('student.attendance'),
                ]);
            } else {
                \Log::warning('Label mismatch: ' . $result['label'] . ' ≠ ' . $expectedLabel);

                return response()->json([
                    'status'  => 'fail',
                    'message' => 'Wajah tidak cocok (' . $result['label'] . ' ≠ ' . $expectedLabel . ')',
                ]);
            }


        } catch (\Exception $e) {
            \Log::error('Presensi error: ' . $e->getMessage());

            return response()->json([
                'status'  => 'error',
                'message' => 'Terjadi kesalahan: ' . $e->getMessage(),
            ], 500);
        }
    }

}
