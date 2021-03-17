<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InitWebsiteData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // php artisan website:init
    protected $signature = 'website:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'khởi tạo dữ liệu website';

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
        $this->info('text info');  // thong bao mau xanh
        $this->error('error');   // mau do
               // $this->info('text info');
        $this->initCategory();
        // $this->initTags();
        // $this->initPosts();
    }

    public function initCategory()
    {
        $this->info('call initCategory');
         $categoris = [
        'Kinh Tế',
        'Văn Hóa',
        'Pháp Luật',
        'Thể Thao',
        'Công nghệ',
    ];

        foreach($categoris as $category) {
            $cate = new \App\Models\Category;
            $cate->name = $category;
            $cate->description = $category;
            $cate->save();
        }
    }

    // public function initTags()
    // {
    //     $tag = new \App\Models\Tag;
    //     $tag->name = 'covid19';
    //     $tag->save();   

    //     $tag = new \App\Models\Tag;
    //     $tag->name = 'kinh te';
    //     $tag->save();   

    //     $tag = new \App\Models\Tag;
    //     $tag->name = 'MMA';
    //     $tag->save();
    // }

    // public function initPosts()
    // {
        
    // }
}
