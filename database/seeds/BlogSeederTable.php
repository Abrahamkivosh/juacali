<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\User;
use App\Comment;
class BlogSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(Blog::class, 10)->create()->each(function ($blog) {
        //    $blog->comments()->save(factory(Comment::class)->make());
       // });
         factory(Blog::class, 20)->create();
         factory(Comment::class, 30)->create();
    }
}
