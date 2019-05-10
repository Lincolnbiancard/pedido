<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        
        return view('listcustomers')->with('customers', $customers);
    }

    public function formcustomer(){
        return view('formcustomer');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Customer::create($data);
        return redirect('formcustomer');
    }


    public function updatecustomer($id){
        
        $customers = Customer::find($id);

        return view('updatecustomer')->with('customers', $customers);
    }

    public function update(Request $request, $id)
    {
        $request = $request->all();
        $customers = Customer::find($id);
        $customers->update($request);

        return redirect('customers');
    }


    public function destroy($id)
    {
        $customer = Customer::find($id);
        
        $customer->delete();
 
        return redirect('customers');
    }



}
