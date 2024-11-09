<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Status;
use App\Models\Type;
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
        //
    }


    public function store(Request $request)
    {

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
