<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(){

        // dd('Hello sir');

        $data['employeedatas'] = [
            'name'=>'Aung Ko Ko',
            'email'=>'aungkoko@gmail.com',
            'phone'=>'09123456'
        ];

        // dd($employeedatas);

        return view('employees/index',$data);

    }

    public function passingdataone(){

        $greeting = "Have a good day";
        $hifi = "Thanks sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        return view('employees/dataone',['greet'=>$greeting,'hi'=>$hifi,'staffs'=>$employees]);
    }

    public function passingdatatwo(){

        $greeting = "Have a good day";
        $hifi = "Regards sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        return view('employees/datatwo')->with('greet',$greeting)->with('hi',$hifi)->with('staffs',$employees);


    }

    public function passingdatathree(){

        $greeting = "Have a good day";
        $hifi = "Regards sir";

        $employees = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        // return view('employees/datathree',compact("greeting","hifi","employees"));
        return view('employees/datathree')->with(compact("greeting","hifi","employees"));

    }

    public function show(){

        $greeting = "Have a good day";
        $hifi = "Regards sir";

        $data['employees'] = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        return view('employees/show',$data);

    }

    public function edit(){

        $greeting = "Have a good day";
        $hifi = "Regards sir";

        $data['employees'] = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        return view('employees/edit',compact('data'));

    }


    public function update(){

        $greeting = "Have a good day";
        $hifi = "Regards sir";

        $data['employees'] = [
            "Honey Nway Oo",
            "Mandalay",
            '09111111'
        ];

        return view('employees/update',["employees"=>$data['employees']]);

    }

}
