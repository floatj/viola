<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;

class TestMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '測試寄信';

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
     * @return mixed
     */
    public function handle()
    {
        //測試寄信
        echo "[測試寄信]\n";

        $message = "這是一封測試信件!!<br/>-- from viola project";

        Mail::raw($message, function ($message){
            $message->to("floatj@gmail.com");
        });

        echo "測試結束\n";
    }
}
