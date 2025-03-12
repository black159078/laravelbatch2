<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Day;
use App\Models\Post;
use App\Models\Tag;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $attshows = Status::whereIn('id',[3,4])->get();
        $days = Day::where('status_id',3)->get();
        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tags = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('posts.create',compact('attshows','days','statuses','tags','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ths->valdate($request,[
            'image'=>'image|mimes:jpg,jpeg,png|max:1024',
            'title'=>'required|max:300,unique:posts,title',
            'content'=>'required',
            'fee'=>'required',
            'startdate'=>'required|date',
            'enddate'=>'required|date',
            'starttime'=>'required|time',
            'endtime'=>'required|time',
            'type_id'=>'required|in:1,2',
            'tag_id'=>'required',
            'attshow'=>'required|in:3,4',
            'status_id'=>'required|in:7,10,11'
        ]);


        $user = Auth::user();
        $user_id = $user->id;

        $post = new Post();
        $post->image = $request['image'];
        $post->title = $request['title'];
        $post->slug = Str::slug('title');
        $post->content = $request['content'];
        $post->fee = $request['fee'];
        $post->startdate = $request['startdate'];
        $post->enddate = $request['enddate'];
        $post->starttime = $request['starttime'];
        $post->endtime = $request['endtime'];
        $post->type_id = $request['type_d'];
        $post->tag_id = $request['tag_id'];
        $post->attshow = $request['attshow'];
        $post->status_id = $request['status_id'];
        $post->user_id = $user_id;

        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $attshows = Status::whereIn('id',[3,4])->get();
        $days = Day::where('status_id',3)->get();
        $statuses = Status::whereIn('id',[7,10,11])->get();
        $tags = Tag::where('status_id',3)->get();
        $types = Type::whereIn('id',[1,2])->get();
        return view('posts.edit',compact('attshows','days','statuses','tags','types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ths->valdate($request,[
            'image'=>'image|mimes:jpg,jpeg,png|max:1024',
            'title'=>'required|max:300,unique:posts,title',
            'content'=>'required',
            'fee'=>'required',
            'startdate'=>'required|date',
            'enddate'=>'required|date',
            'starttime'=>'required|time',
            'endtime'=>'required|time',
            'type_id'=>'required|in:1,2',
            'tag_id'=>'required',
            'attshow'=>'required|in:3,4',
            'status_id'=>'required|in:7,10,11'
        ]);


        $user = Auth::user();
        $user_id = $user->id;

        $post = Post::findOrFail($id);
        $post->image = $request['image'];
        $post->title = $request['title'];
        $post->slug = Str::slug('title');
        $post->content = $request['content'];
        $post->fee = $request['fee'];
        $post->startdate = $request['startdate'];
        $post->enddate = $request['enddate'];
        $post->starttime = $request['starttime'];
        $post->endtime = $request['endtime'];
        $post->type_id = $request['type_d'];
        $post->tag_id = $request['tag_id'];
        $post->attshow = $request['attshow'];
        $post->status_id = $request['status_id'];
        $post->user_id = $user_id;

        $post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->back();
    }
}
