<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Repositories\Posts;

class PostsController extends Controller
{

    protected $posts;

public function __construct(Posts $posts)
{
    $this->posts = $posts;
}


    public function index()
    {
            $posts = $this->posts->all(20);
            return view('posts.index', compact('posts'));
    }

    public function show($id)
    {


        $post = $this->posts->find($id);
        return view('posts.show', compact('post'));
    }
}
