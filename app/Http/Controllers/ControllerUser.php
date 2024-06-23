<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function CRUD(){
        $users = User::all();
       //return response()->json($users);
       return view('CRUD', compact('users'));
    }

    public function create(Request $request){

       //dd($request);

       $request->validate([
        'name' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'edad' => 'required|integer',
        'email'=> 'required|string|max:100',
        'password'=>'required|string|max:100'
    ]);

       User::create([
        'name' => $request->name,
        'lastname' => $request->lastname,
        'edad' => $request->edad,
        'email' => $request->email,
        'password'=>$request->password,
       ]);

       redirect()->back()->with('succes','Usuario creado exitosamente');
    }
}
