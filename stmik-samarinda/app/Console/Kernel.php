<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Tentukan perintah Artisan yang harus dijadwalkan.
     */
    protected function schedule(Schedule $schedule)
    {
        // Contoh: Menjalankan command setiap hari jam 12 malam
        $schedule->command('clean:tempforms')->hourly();
    }

    /**
     * Daftarkan perintah Artisan.
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');
    }
}
