<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    
    public function index()
    {
       $posts = Post::take(5)->get();

       return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3',
            'forumid' => 'required',
            'content' => 'required'

        ]);

        if ($validator->fails()) {

            return redirect('post')
                        ->withErrors($validator)
                        ->withInput();
        }

        Post::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
            'section' => $request->forumid,
            'content' => $request->content
        ]);

        return redirect('/posts');

    }

    public function show(Post $post) {

        return view('post.single',compact('post'));

    }
}
