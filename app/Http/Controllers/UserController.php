<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    

public function index(){

//  $user =   User::find($id)->first();

$users = User::with('visacard')->get();  //one to many

//  $user =  User::get();
//   dd($user->visacard());
//    $user =  User::get();
//    dd($user->visacard());
   return view('hello',compact('users'));
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

// User::all();
DB::table('users')->get();

}


public function show($id){
//   $user =   User::find($id)->visacard()->get();
//   dd($user);

 $user =   User::find($id)->first();  //one to one
   return view('show',compact('user'));
}



}
