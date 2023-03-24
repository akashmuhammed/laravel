<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Migration;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){
        $users=User::all();
        $migrations=Migration::all();
        $datas = \DB::Table('users')->get();
        
        return view('welcome',compact("users","migrations","datas"));
      
    } 
    public function aboutPage(){
        return view('about');
    }
public function newUser(){
    return view ('users.new-user');
}



public function save (){
    $name = request('name');
    $email = request('email');
    $dob = request('dob');
    $status = request('status');

    User::create([

        'name'=> $name,
        'email'=> $email,
        'Date_of_birth'=> $dob,
        'status'=> $status,



    ]);
    return "success";


    
}





}
