<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Status;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class GendersController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('genders.index',compact('genders','statuses'));
    }


    public function create()
    {
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('genders.create',compact('statuses'));
    }


    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|unique:gender,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $gender = new Gender();
        $gender->name = $request['name'];
        $gender->slug = Str::slug($request['name']);
        $gender->status_id = $request['status_id'];
        $gender->user_id = $user_id;

        $gender->save();

        return redirect(route('genders.index'));
    }


    public function show(string $id)
    {
        $gender = Gender::findOrFail($id);
        return view('genders.show',compact('gender'));
    }


    public function edit(string $id)
    {
        $gender = Gender::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('genders.edit',compact('gender','statuses'));
    }


    public function update(Request $request, string $id)
    {

        $this->validate($request,[
            'name'=>'required|unique:gender,name',
            'status_id'=>'required|in:3,4'
        ]);

        $user = Auth::user();
        $user_id = $user->id;

        $gender = Gender::findOrFail($id);
        $gender->name = $request['name'];
        $gender->slug = Str::slug($request['name']);
        $gender->status_id = $request['status_id'];
        $gender->user_id = $user_id;

        $gender->save();

        return redirect(route('genders.index'));
    }


    public function destroy(string $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return redirect()->back();

    }
}
