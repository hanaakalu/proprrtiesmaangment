<?php

namespace App\Http\Controllers;
use App\Models\Storekeeper;
use Illuminate\Http\Request;

class StorekeeperController extends Controller
{
    //
    public function register()
  {
  return view('Storekeeper.register');
  }
    function store(Request $request)
    
    {
      $Storekeeper =new Storekeeper();
      $Storekeeper->c_lname = $request->c_lname;
      $Storekeeper->c_fname = $request->c_fname;
      $Storekeeper->c_sex = $request->c_sex;
      $Storekeeper->c_birthdate = $request->c_birthdate;
      $Storekeeper->c_email = $request->c_email;
      $Storekeeper->c_phone = $request->c_phone;
     $is_saved = $Storekeeper->save();
    if($is_saved){
    echo "SAVED SUCCESSFULLY.";
               }
    else{
     echo "Sorry, try again something went wrong.";
       }

       
    }
    public function get_all()
{
 $Storekeeper = Storekeeper::all();
 return view('Storekeeper.list', compact('Storekeeper'));
}
public function edit($id)
 {
 $Storekeeper = Storekeeper::find($id);
 return view('storekeeper.edit', compact('Storekeeper'));
 }
 public function update(Request $request)
 {
 //Validate
 $request->validate(['name' => 'required' ]);
  $Storekeeper = Storekeeper::find($request->id);
  $Storekeeper->c_name = $request->c_name;
  $Storekeeper->c_fname = $request->c_fname;
  $Storekeeper->c_sex = $request->c_sex;
  $Storekeeper->c_birthdate = $request->c_birthdate;
  
  $Storekeeper->c_email = $request->c_email;
  $Storekeeper->c_phone = $request->c_phone;
  $Storekeeper->save();
  return redirect('storekeeper/list');
  }
  public function delete($id)
 {
 Storekeeper::where('id', $id)->delete();
 return redirect('storekeeper/list');
 }

 public function get_by_id($id)
 {
  $Storekeeper = Storekeeper::where('id', $id)->first();
  return view('storekeeper.search', compact('Storekeeper'));
  }
}