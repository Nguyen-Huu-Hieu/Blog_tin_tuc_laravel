<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class DeletePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:delete  {from} {to}';

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
        // dump($this->argument('id'));
        // dd($this->argument('idCategory'));

        $from = $this->argument('from');
        $to = $this->argument('to');
        $posts = Post::where('id', '>=', $from)->where('id', '<=', $to)->get();
        // Post::where('id', $id)->delete();
        foreach ($posts as $post) {
            $post->delete();
        }
        $this->info('xoa thanh cong ban ghi ');
    }
}
