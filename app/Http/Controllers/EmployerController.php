<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class EmployerController extends Controller
{
  function index(){

    return view('employer.index');
  }
  function profile(){
    $user = new User();
   $data = $user->where('username',session::get('username'))
                        //->where('password','student')
                        ->get();

    return view('student.profile')->with('user',$data);
  }
}
