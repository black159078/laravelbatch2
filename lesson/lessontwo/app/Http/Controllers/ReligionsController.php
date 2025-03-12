<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use App\Models\Status;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ReligionsController extends Controller
{

    public function index()
    {
        $religions = Religion::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('religions.index',compact('religions','statuses'));
    }


    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('religions.create',compact('statuses'));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:religion,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $religion = new Religion();
        $religion->name = $request['name'];
        $religion->slug = Str::slug($request['name']);
        $religion->status_id = $request['status_id'];
        $religion->user_id = $user_id;

        $religion->save();

        return redirect(route('religions.index'));
    }


    public function show(string $id)
    {
        $religion = Religion::findOrFail($id);
        return view('religions.show',compact('religion'));
    }


    public function edit(string $id)
    {
        $religion = Religion::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('religions.edit',compact('religion','statuses'));
    }


    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=>'required|unique:religion,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $religion = Religion::findOrFail($id);
        $religion->name = $request['name'];
        $religion->slug = Str::slug($request['name']);
        $religion->status_id = $request['status_id'];
        $religion->user_id = $user_id;

        $religion->save();

        return redirect(route('religions.index'));
    }


    public function destroy(string $id)
    {
        $religion = Religion::findOrFail($id);
        $religion->delete();

        return redirect()->back();

    }
}
