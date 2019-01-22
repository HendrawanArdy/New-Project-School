<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employe;

class EmployeController extends Controller
{
    function index(){
      $employe = Employe::get(['employe_id','employe_name','employe_address','employe_phone_number'
    ]);
   
    return view('employe.index',compact('employe'));
    }
function create(){
    return view('employe.create');
}
public function store (Request $request){
 
   $txtName = $request->input('txt_Name');
   $txtAddress = $request->input('txt_Address');
   $txtNumber = $request->input('txt_Number');

    echo  $txtName."<br/>".$txtAddress."<br/".$txtNumber;

    employe::create([
        'employe_name'=>$txtName,
        'employe_address'=>$txtAddress,
        'employe_phone_number'=>$txtNumber
    ]);
    return redirect('/employe');
}
    public function update(Request $request, $employe_id)
   {
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');
    $txtNumber = $request->input('txt_number'); 

    employe::where('employe_id', $employe_id)->update([
        'employe_name'=>$txtName,
        'employe_address'=>$txtAddress,
        'employe_phone_number'=>$txtNumber
    ]);
    return redirect('/employe');
   }
    public function destroy($employe_id)
    {
        $employe = employe::where('employe_id',$employe_id)->First();
        $employe->delete();
        return redirect('/employe');
    }
    public function show($id){
        $employe = employe::where('employe_id', $id)->get();
        return view('employe/show', compact('employe')); 
    }
    public function edit($id){
        $employe = employe::where('employe_id', $id)->get();
        return view('employe/edit', compact('employe'));
    }
}