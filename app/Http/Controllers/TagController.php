<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index' , compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTagRequest $request)
    {
        $validatedData = $request ->validated();
        Tag::create($validatedData);
        return redirect()->route('Tags.create')->with('success', 'Tags created succesfully');
    }


    public function show(Tag $tag)
    {
        return view('admin.tags.show', compact('tag') );
    }


    public function edit($id)
    {
        // $tags = Tag::select(['id','name'])->get();
        $tags= Tag::findOrFail($id);
      //  $tags = Tag::all();
        return view('admin.tags.edit' , compact('tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
    **/
    public function update( Request $request , Tag $tags)
    {

        $validator = $request->validate([
            'name' => 'required | min:3 | max:15',
        ]);

        $tags->update($request->all());
//        dd($tags);
        //$tag->update($request->validated());
//        $tag->update($validatedData);
        return redirect()->route('Tags.index')->with('success', 'Tags updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        Tag::destroy($tag->id);
        return redirect()->route('Tags.index')->with('success', 'Tags deleted succesfully');
    }
}
