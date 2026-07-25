<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    

public function index(){
    return view('hello');
}

public function create(){
    return view('user.create');
}

public function store(Request $request){

  $validated = $request->validate([
        'name' => 'required|max:15|min:3',
        'email' => 'required|email:rfc,dns',
        'password' => 'required|max:15|min:3',
    ]);
   
User::insert([
    'name'=>$validated['name'],
    'email'=>$validated['email'],
    'password'=>$validated['password']
]);

return Redirect()->route('users');

}

}
