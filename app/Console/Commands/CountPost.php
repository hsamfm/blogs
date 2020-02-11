<?php

namespace App\Console\Commands;

use App\Post;
use Illuminate\Console\Command;

class CountPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'count:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Counting Posts';

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
        $posts = Post::all()->count();
        $this->info("Post Count {$posts}");
    }
}
