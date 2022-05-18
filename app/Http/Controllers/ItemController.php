<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function register()
    {
    return view('Item.register');
    }
      function store(Request $request)
      
      {
        $Item =new Item();
        $Item->name = $request->name;
        $Item->model = $request->model;
        $Item->unit = $request->unit;
        $Item->price = $request->price;
        $Item->quantity = $request->quantity;
       
       $is_saved = $Item->save();
      if($is_saved){
      echo " Item INFORMATION IS SAVED SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
{
 $Item = Item::all();
 return view('Item.get_all', compact('Item'));
}
public function edit($id)
 {
 $Item = Item::find($id);
 return view('Item.edit', compact('Item'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['name' => 'required' ]);
  $Item = Item::find($request->id);
  $Item->name = $request->name;
  $Item->model = $request->model;
  $Item->unit = $request->unit;
  $Item->price = $request->price;
  $Item->quantity = $request->quantity;
  
  $Item->save();
  return redirect('Item/get_all');
  }
  public function delete($id)
 {
 Item::where('id', $id)->delete();
 return redirect('Item/get_all');
 }

 public function get_by_id($id)
 {
  $Item = Item::where('id', $id)->first();
  return view('Item.search', compact('Item'));
  }
}
