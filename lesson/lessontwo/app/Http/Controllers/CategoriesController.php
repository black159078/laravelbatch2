<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('categories.index',compact('categories','statuses'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $user = Auth::user();
        $user_id = $user->id;

        $category = new Category();
        $category->name = $request['name'];
        $category->slug = Str::slug($request['name']);
        $category->status_id = $request['status_id'];
        $category->user_id = $user_id;

        $category->save();

        return redirect(route('categories.index'));
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

        $category = Category::findOrFail($id);
        $category->name = $request['name'];
        $category->slug = Str::slug($request['name']);
        $category->status_id = $request['status_id'];
        $category->user_id = $user_id;

        $category->save();

        return redirect(route('categories.index'));
    }


    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back();

    }
}
