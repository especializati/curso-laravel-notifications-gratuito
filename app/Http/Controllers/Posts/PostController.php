<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    public function index()
    {
        $posts = $this->post->with('comments')->paginate();

        return view('posts.index', compact('posts'));
    }


    public function show($id)
    {
        $post = $this->post->with(['comments.user', 'user'])->find($id);// where('id', $id)->first();

        return view('posts.show', compact('post'));
    }
}
