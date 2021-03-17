<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AddWebsitePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'website:add-article';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'thêm DL danh sách bài viết';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    // function construct : có thể nhúng các Model vào đây
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    // hàm handle: chứa những khối lệnh sẽ thực thi khi chạy command đó
    public function handle()
    {

    }

    
}
