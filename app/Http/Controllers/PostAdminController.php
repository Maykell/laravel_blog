<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{

    private $post;

    public function __construct(Post $post){

        $this->post = $post;
    }

    public function index(){

        $posts = $this->post->orderBy('id')->paginate(5);

        return view('admin.posts.index', compact('posts'));
    }

    public function create(Request $request, Tag $tag){

        $user = $request->user();
        $tags = $tag->lists('name','id');
        return view('admin.posts.create', compact('tags','user'));
    }

    public function store(PostRequest $request){

        $post = $this->post->create($request->all());
        $post->tags()->attach($request->get('tag'));

        return redirect()->route('admin.posts.index');
    }

    public function edit($id, Tag $tag){

        $post = $this->post->find($id);
        $tags = $tag->lists('name','id');
        return view('admin.posts.edit', compact('post', 'tags'));
    }

    public function update(PostRequest $request, $id){

        $this->post->find($id)->update($request->all());
        $this->post->find($id)->tags()->sync($request->get('tag'));

        return redirect()->route('admin.posts.index');
    }

    public function destroy($id){
        $post = $this->post->find($id);
        $post->tags()->detach();
        $post->comments()->delete();
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
