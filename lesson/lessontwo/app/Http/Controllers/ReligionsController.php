<?php

namespace App\Http\Controllers;

use App\Models\Religion;
use App\Models\Status;
use App\Models\Type;
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
        //
    }


    public function store(Request $request)
    {

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
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {

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
