<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $frontend=Category::factory()->create(['name'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend']);

        Blog::factory(3)->create(['category_id'=>$frontend->id]);
        Blog::factory(3)->create(['category_id'=>$backend->id]);


 Comment::factory(10)->create();



    }
}
