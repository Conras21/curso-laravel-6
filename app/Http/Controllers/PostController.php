<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdatePost;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));

    }

    public function create(){
        return view('admin.posts.create');
    }

    public function store(storeUpdatePost $request){
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }
}
