<?php

use Illuminate\Database\Seeder;
use App\post;
use App\Comment;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class,50)
        ->create()
        ->each(function ($post));
    }
}
