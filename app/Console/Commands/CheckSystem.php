<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class CheckSystem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CheckSystem';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '檢查系統';

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
        //執行系統檢查
        $this->comment("[viola] CheckSystem Tool");
        $this->basic_info();
        $this->system_check();
        $this->info("系統檢查完成！");
    }


    /**
     * 基本資訊
     */
    public function basic_info()
    {
        $this->line("- 網路資訊");
        $this->line("hostname: ".gethostname());

        $ret = shell_exec("ip addr");
        $this->line( "ip: ".$ret);
    }

    /**
     * 系統檢查
     */
    public function system_check()
    {
        //check DB
        $this->line("- 檢查DB連線...");
        try {
            DB::connection()->getPdo();
            if(DB::connection()->getDatabaseName()){
                $this->info("DB連線檢查成功: PDO 可連接至此 DB: " . DB::connection()->getDatabaseName());
            }
        } catch (\Exception $e) {
            $this->error("DB連線檢查失敗，請檢查DB設定！");
        }

        //check dir
        $this->line("- 檢查目錄寫入權限...");
        $this->line(" app: storage path is writable: ".is_writeable(storage_path()));
        $this->line(" app: bootstrap/cache path is writable: ".is_writeable(base_path()."/bootstrap/cache"));
    }
}
