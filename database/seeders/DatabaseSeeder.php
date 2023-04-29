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


        $life=Category::factory()->create(['name'=>'life']);
        $work=Category::factory()->create(['name'=>'work']);
        $travel=Category::factory()->create(['name'=>'travel']);
        Blog::factory(3)->create(['category_id'=>$life->id]);
        Blog::factory(3)->create(['category_id'=>$work->id]);
        Blog::factory(3)->create(['category_id'=>$travel->id]);


 Comment::factory(10)->create();



    }
}
