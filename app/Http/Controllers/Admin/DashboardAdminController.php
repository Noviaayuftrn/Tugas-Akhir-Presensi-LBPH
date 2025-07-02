<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Major;
use App\Models\Classes;
use App\Models\Attendance;
use App\Models\Schedule;
use Carbon\Carbon;

class DashboardAdminController extends Controller
{
    public function index() : View
    {
        $totalGuru = Teacher::count();
        $totalSiswa = Student::count();
        $totalMapel = Subject::count();
        $totalJurusan = Major::count();
        $totalKelas = Classes::count();

        return view('admin.dashboard', compact('totalGuru', 'totalSiswa', 'totalMapel', 'totalJurusan', 'totalKelas'));
    }

    public function dashboardGuru() : View
    {
        $user = Auth::user();

        if ($user->role !== 'guru') {
            abort(403, 'Akses hanya untuk guru');
        }

        $teacher = $user->teacher;

        $scheduleIds = Schedule::where('teach_id', $teacher->id)->pluck('id');

        $rekap = Attendance::whereIn('schedule_id', $scheduleIds)
        ->join('schedules', 'attendances.schedule_id', '=', 'schedules.id')
        ->selectRaw('schedules.date as tanggal,
                    SUM(attendances.status = "hadir") as hadir,
                    SUM(attendances.status != "hadir") as tidak_hadir')
        ->groupBy('tanggal')
        ->orderByDesc('tanggal')
        ->take(7)
        ->get();

        return view('guru.dashboard', compact('rekap'));
    }

    public function dashboardSiswa(): View
    {
        $userId = auth()->id();

        $totalAlpa = Attendance::where('user_id', $userId)->where('status', 'alpa')->count();
        $totalSakit = Attendance::where('user_id', $userId)->where('status', 'sakit')->count();
        $totalIzin = Attendance::where('user_id', $userId)->where('status', 'izin')->count();

        return view('siswa.dashboard', compact('totalAlpa', 'totalSakit', 'totalIzin'));
    }    

}
