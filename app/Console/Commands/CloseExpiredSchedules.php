<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Schedule;
use Carbon\Carbon;

class CloseExpiredSchedules extends Command
{
    protected $signature = 'schedule:close-expired';
    protected $description = 'Menutup otomatis jadwal presensi yang sudah melewati jam selesai';

    public function handle()
    {
        \Log::info("⏱️ Scheduler jalan: " . now('Asia/Makassar'));

        $schedules = Schedule::where('status', 'open')->get();

        foreach ($schedules as $schedule) {
            $jamSelesai = \Carbon\Carbon::parse($schedule->date . ' ' . $schedule->jam_selesai, 'Asia/Makassar');
            $now = now('Asia/Makassar');

            \Log::info("⏱️ Jadwal ID: {$schedule->id} | Jam selesai: {$jamSelesai} | Sekarang: {$now}");

            if ($now->gt($jamSelesai)) {
                $schedule->status = 'closed';
                $schedule->save();

                \Log::info("✅ Sesi presensi dengan ID {$schedule->id} ditutup otomatis.");
            }
        }
    }


}
