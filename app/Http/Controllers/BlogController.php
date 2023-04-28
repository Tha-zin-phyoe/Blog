<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs', [
            'blogs'=>Blog::latest()
                        ->filter(request(['search','category','username']))
                        ->paginate(6)
                        ->withQueryString()
        ]);
    }

    public function show(Blog $blog)
    {
        return view('blog', [
            'blog'=>$blog,
            'randomBlogs'=>Blog::inRandomOrder()->take(3)->get()
        ]);
    }


    public function subscriptionHandler(Blog $blog)
    {
        if (User::find(auth()->id())->isSubscribed($blog)) {
            $blog->unSubscribe();
        } else {
            $blog->subscribe();
        }

        return back();
    }

    // Admin
    public function create(){

        return view('admin.dashboard',['categories'=>Category::all()]);
    }

    public function store()
    {
        $formData = request()->validate([
            "title" => ["required"],
            "slug" =>  ["required", Rule::unique('blogs', 'slug')],
            "intro" =>  ["required"],
            "body" =>  ["required"],
            "category_id" =>  ["required", Rule::exists('categories', 'id')]
        ]);
        $formData['user_id'] = auth()->id();
        $formData['image'] = request()->file('image')->store('assets');
        Blog::create($formData);

        return redirect('/');
    }
}
