<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Status;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('tags.index',compact('tags','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('tags.create',compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:tag,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $tag = new Tag();
        $tag->name = $request['name'];
        $tag->slug = Str::slug($request['name']);
        $tag->status_id = $request['status_id'];
        $tag->user_id = $user_id;

        $tag->save();

        return redirect(route('tags.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('tags.show',compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('tags.edit',compact('tag','statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'name'=>'required|unique:tag,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $tag = Tag::findOrFail($id);
        $tag->name = $request['name'];
        $tag->slug = Str::slug($request['name']);
        $tag->status_id = $request['status_id'];
        $tag->user_id = $user_id;

        $tag->save();

        return redirect(route('tags.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->back();

    }
}
