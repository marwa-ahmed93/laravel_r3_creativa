<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{



public function create(){
  return view('cars.create');
}


public function store(Request $request)
{
// dd($request->all());

  $validated = $request->validate([
        'model' => 'required|max:255',
        'price' => 'required',
        'image' => 'required|mimes:jpg,bmp,png'
    ]);

$image =  Storage::put('avatar', $validated['image']);

 Car::insert([
  'model' => $validated['model'],
  'price' => $validated['price'],
  'image' => $image 

]);

return Redirect()->route('cars.index');
}


  public function index(){
    $cars = Car::onlyTrashed()->get();
    return view('cars.index' , compact('cars'));
   }
    
public function delete($id){
  Car::find($id)->delete();
return Redirect()->route('cars.index');
}


public function restore($id){
  Car::withTrashed()
        ->where('id', $id)
        ->restore();
}

}
