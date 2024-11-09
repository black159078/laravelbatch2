<?php

namespace App\Http\Controllers;


use App\Models\Role;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RolesController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.index',compact('roles','statuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user();
        $user_id = $user->id;

        $role = new Role();
        $role->name = $request['name'];
        $role->slug = Str::slug($request['name']);
        $role->user_id = $user_id;

        // Single Image Upload

        if(file_exists($request['image'])){
            $file = $request['image'];
            //dd($file);
            $fname = $file->getClientOriginalName();
            //dd($fname);
            $imagenewname = uniqid($user_id).$user_id.$fname;
            //dd($imagenewname);
            $file->move(public_path("assets/img/roles/",$imagenewname));

            $filepath = 'assets/img/roles'.$imagenewname;
            $role->image = $filepath;
        }

        $role->save();

        return redirect(route('roles.index'));
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
        $role = Role::findOrFail($id);
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('roles.edit')->with('role',$role)->with('statuses',$statuses);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $user = Auth::user();
        $user_id = $user->id;

        $role = Role::findOrFail($id);
        $role->name = $request['name'];
        $role->slug = Str::slug($request['name']);
        $role->user_id = $user_id;

        if($request->hasFile('image')){
            $path = $role->image;

            if(File::exists($path)){
                File::delete($path);
            }
        }

        // Single Image Upload

        if(file_exists($request['image'])){
            $file = $request['image'];
            //dd($file);
            $fname = $file->getClientOriginalName();
            //dd($fname);
            $imagenewname = uniqid($user_id).$user_id.$fname;
            //dd($imagenewname);
            $file->move(public_path("assets/img/roles/",$imagenewname));

            $filepath = 'assets/img/roles'.$imagenewname;
            $role->image = $filepath;
        }



        $role->save();

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);

        // Remove Old Single Image
        $path = $role->image;

        if(File::exists($path)){
            File::delete($path);
        }

        $role->delete();

        return redirect()->back();

    }
}


// ALTER TABLE roles
// ADD CONSTRAINT unique_name UNIQUE (name);


// SHOW INDEX FROM roles;