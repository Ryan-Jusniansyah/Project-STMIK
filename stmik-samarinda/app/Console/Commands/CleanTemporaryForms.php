<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\TemporaryForm;
use Illuminate\Console\Command;

class CleanTemporaryForms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clean:tempforms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Hapus form sementara yang lebih dari 2 jam';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        TemporaryForm::where('created_at', '<', Carbon::now()->subHours(2))->delete();
        $this->info('Data sementara yang telah lama dihapus.');
    }
}
