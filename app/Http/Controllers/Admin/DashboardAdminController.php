<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('guru.dashboard');
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
