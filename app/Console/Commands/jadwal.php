<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class jadwal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:jadwal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Menentukan batas akhir absensi siswa';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if (date('H') == '08') {
            // Send email logic here
            // ...
            $this->info('Email sent!');
        } else {
            $this->info('It is not 8am yet.');
        }
        //
    }
}
