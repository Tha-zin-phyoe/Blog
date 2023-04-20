<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
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
        // User::truncate();
        // Blog::truncate();
        // Category::truncate();
        // User::factory()->create();

        // $frontend=Category::create([
        //     'name'=>'frontend',
        //     'slug'=>'frontend'
        // ]);
        // $backend=Category::create([
        //     'name'=>'backend',
        //     'slug'=>'backend'
        // ]);

        // Blog::create([
        //     'title'=>'frontend post',
        //     'slug'=>'frontend-post',
        //     'intro'=>'this is intro',
        //     'body'=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
        //     'category_id'=>$frontend->id,
        //     'user_id'=>1,
        // ]);
        // Blog::create([
        //     'title'=>'backend post',
        //     'slug'=>'backend-post',
        //     'intro'=>'this is intro',
        //     'body'=>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.",
        //     'category_id'=>$backend->id,
        //     'user_id'=>1,
        // ]);

        User::truncate();
        Blog::truncate();
        Category::truncate();

        $frontend=Category::factory()->create(['name'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend']);

        Blog::factory(2)->create(['category_id'=>$frontend->id]);
        Blog::factory(2)->create(['category_id'=>$backend->id]);
    }
}
