<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index',[
            'blogs'=>Blog::latest()->paginate(6)
        ]);
    }

    public function create()
    {

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

    public function edit(Blog $blog){

        return view('admin.edit',['blog'=>$blog,'categories'=>Category::all()]);
    }

    public function destory(Blog $blog){
        $blog->delete();
        return back();
    }
}
