<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\BiosRepository;

class BiosServiceTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'BiosService:Test {contributionName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $contributionName = $this->argument('contributionName');

        if ($this->confirm('This is a test. Do you want to continue (y/N)')) {
            //
            $biosRepository = new BiosRepository();
            $response = $biosRepository->findByContribution($contributionName);

            $found = false;

            foreach($response as $key => $bio) {
                foreach($bio->contribs as $contrib) {
                    if($contrib == $contributionName) {
                        $found = true;
                    }
                }
            }

            if($found) {
                $this->info('document exists');
            } else {
                $this->error('Nothing done. Exiting...');
            }
        } else {
            $this->error('Nothing done. Exiting...');
        }

        return 0;
    }
}
