<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    /**
     * @var Post
     */
    private $post;

    public function __construct(Post $post){

        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->simplePaginate(5);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {

        //$post = $this->post->where('title', $title)->first();
        $post = $this->post->find($id);
        return view('posts.single', ['post'=>$post]);

    }


}
