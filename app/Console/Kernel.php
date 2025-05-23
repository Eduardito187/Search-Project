<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('jobSearchProccess:cron')->everyTenMinutes();
        $schedule->command('jobSendMailIndex:cron')->everyTenMinutes();
        $schedule->command('jobIndexationProccess:cron')->everyTenMinutes();
        $schedule->command('jobSaveHistoryCustomerUuid:cron')->everyFiveMinutes();
        $schedule->command('backupDB')->dailyAt('00:00');
        $schedule->command('disabledIndexProducts:cron')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
