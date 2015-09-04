<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\TagRequest;
use App\Tag;

class TagController extends Controller
{
    /**
     * @var Tag
     */
    private $tag;

    public function __construct(Tag $tag){

        $this->tag = $tag;
    }

    public function index(){

        $tags = $this->tag->orderBy('id')->paginate(5);

        return view('admin.tags.index', compact('tags'));
    }

    public function create(){

        return view('admin.tags.create');
    }

    public function store(TagRequest $request){

        $this->tag->create($request->all());

        return redirect()->route('admin.tags.index');
    }

    public function edit($id){
        
        $tag = $this->tag->find($id);

        return view('admin.tags.edit', ['tag' => $tag]);
    }

    public function update(TagRequest $request, $id){

        $this->tag->find($id)->update($request->all());

        return redirect()->route('admin.tags.index');
    }

    public function destroy($id){

        $this->tag->find($id)->delete();

        return redirect()->route('admin.tags.index');
    }
}
