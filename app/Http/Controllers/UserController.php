<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){

        $data=array(
            "id"=>$id,
            "name"=>"Joshua Akia",
            "age"=>22,
            "email"=>"akikiun14@gmail.com"
        );
       // return view('user', ['data' => $data]);
       return view ('user', $data);
    }
}
