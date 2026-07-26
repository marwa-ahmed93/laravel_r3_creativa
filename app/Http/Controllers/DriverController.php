<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverController extends Controller
{




public function create(){
  return view('drivers.create');
}

public function store(Request $request){
// dd($request->all());

  $validated = $request->validate([
        'name' => 'required|max:15|min:3',
        'email' => 'required|email:rfc,dns',
        'password' => 'required|max:15|min:3',
    ]);
   
Driver::create([
    'name'=>$validated['name'],
    'email'=>$validated['email'],
    'password'=>$validated['password']
]);

// $driver = new Driver();
// $driver->name = $request->name ;
// $driver->email = $request->email ;
// $driver->password = $request->password ;
// $driver->save();
return Redirect()->route('drivers.index');

}




public function index(){
  
    $drivers = Driver::paginate(10);             //ORM
//$drivers = DB::table('drivers')->paginate(10);   //query builder
// $drivers = Driver::where('id', '>' ,10)->orderBy('name')->get();
   return view('drivers.index' ,compact('drivers'));
      
}


// public function index(Request $request)
// {
//     $search = $request->search;

//     $drivers = Driver::when($search, function ($query) use ($search) {
//         $query->where('id', $search)
//               ->orWhere('name', 'like', "%{$search}%");
//     })
//     ->paginate(10)
//     ->withQueryString();

//     return view('drivers.index', compact('drivers'));
// }

public function show($id){
 //$driver = Driver::findOrFail($id);  //ORM
 $driver = DB::table('drivers')->find($id);   //query

 return view('drivers.show',compact('driver')) ;
}





// public function search(Request $request)
// {
//     $search = $request->search;

//     $drivers = Driver::where('id', $search)
//         ->orWhere('name', 'like', "%{$search}%")
//         ->get();

//     return view('drivers.index', compact('drivers'));
// }




}
