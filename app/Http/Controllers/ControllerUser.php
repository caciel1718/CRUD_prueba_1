<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function CRUD(){
        $users = User::all();
       //return response()->json($users);
       return view('CRUD', compact('users'));
    }
}
