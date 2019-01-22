<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller{
    function index(){
      //  echo "asoy geboy";
      $customer = Customer::get(['customer_id','name','address']);
     // var_dump($customer);
    return view('Customer.index',compact('customer'));
    }
function create(){
    return view('customer.create');
}
public function store (Request $request){
   // echo "jatimiko";
   $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');
    echo  $txtId. "<br/>".$txtName."<br/>".$txtAddress;

    customer::create([
        'customer_id'=>$txtId,
        'name'=>$txtName,
        'address'=>$txtAddress
    ]);
    return redirect('/customers');
}
    public function update(Request $request, $customer_id)
   {
    $txtId = $request->input('txt_id');
    $txtName = $request->input('txt_name');
    $txtAddress = $request->input('txt_address');

    customer::where('customer_id', $customer_id)->update([
        'name'=>$txtName,
        'address'=>$txtAddress
    ]);
    return redirect('/customers');
   }
    public function destroy($customer_id)
    {
        $customer = customer::where('customer_id',$customer_id)->First();
        $customer->delete();
        return redirect('/customers');
    }
    public function show($id){
        $customer = customer::where('customer_id', $id)->get();
        return view('customer/show', compact('customer')); 
    }
    public function edit($id){
        $customer = customer::where('customer_id', $id)->get();
        return view('customer/edit', compact('customer'));
    }
}