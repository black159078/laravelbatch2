<?php

namespace App\Http\Controllers;

use App\Models\PaymentType;
use App\Models\Status;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PaymentTypesController extends Controller
{
    public function index()
    {
        $paymenttypes = PaymentType::all();
        $statuses = Status::whereIn('id',[3,4])->get();
        return view('paymenttypes.index',compact('paymenttypes','statuses'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $user = Auth::user();
        $user_id = $user->id;

        $paymenttype = new PaymentType();
        $paymenttype->name = $request['name'];
        $paymenttype->slug = Str::slug($request['name']);
        $paymenttype->status_id = $request['status_id'];
        $paymenttype->user_id = $user_id;

        $paymenttype->save();

        return redirect(route('paymenttypes.index'));
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

        $paymenttype = PaymentType::findOrFail($id);
        $paymenttype->name = $request['name'];
        $paymenttype->slug = Str::slug($request['name']);
        $paymenttype->status_id = $request['status_id'];
        $paymenttype->user_id = $user_id;

        $paymenttype->save();

        return redirect(route('paymenttypes.index'));
    }


    public function destroy(string $id)
    {
        $paymenttype = PaymentType::findOrFail($id);
        $paymenttype->delete();

        return redirect()->back();

    }
}
