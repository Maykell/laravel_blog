<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    /**
     * @var Comment
     */
    private $comment;
    private $post;

    public function __construct(Comment $comment, Post $post){

        $this->comment = $comment;
        $this->post = $post;
    }
    public function store(CommentRequest $request, $id){

        $post = $this->post->find($id);
        $post->comments()->create($request->all());

        return back();

    }
}
