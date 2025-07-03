<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

// ✅ Tambahkan use command kamu
use App\Console\Commands\CloseExpiredSchedules;

class Kernel extends ConsoleKernel
{
    // ✅ Daftarkan command custom kamu di sini
    protected $commands = [
        CloseExpiredSchedules::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        \Log::info('🔁 schedule() dijalankan: ' . now('Asia/Makassar'));
        // Jalankan command untuk tutup presensi otomatis setiap 1 menit
        $schedule->command('schedule:close-expired')
         ->everyMinute()
         ->timezone('Asia/Makassar')
         ->evenInMaintenanceMode()
         ->withoutOverlapping();

    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
