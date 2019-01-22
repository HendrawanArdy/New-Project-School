<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;
class SupplierController extends Supplier{
    function index(){
      //  echo "asoy geboy";
      $supplier = Supplier::get(['supplier_id','supplier_name','supplier_address']);
      //var_dump($supplier);
      return view('supplier.index  ',compact('supplier'));
    }
    function create(){
      return view('supplier.create');
    }
    function store (Request $request){
      $txtId = $request->input('txt_Id');
      $txtName = $request->input('txt_Name');
      $txtAddress = $request->input('txt_Address');
      echo $txtId."<br/>".$txtName."<br/>".$txtAddress;

      Supplier::create([
        'supplier_id' => $txtId,
        'supplier_name' => $txtName,
        'supplier_address' => $txtAddress
      ]);
      return redirect ('supplier');
    }
  }