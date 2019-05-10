<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::get();
        
        return view('listproducts')->with('products', $products);
    }

   
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->all();
        Product::create($data);
        return redirect('formproduct');
    }

    public function formproduct(){
        return view('formproduct');
    }

    public function updateproduct($id){
        
        $products = Product::find($id);

        return view('updateproduct')->with('products', $products);
    }
    

    public function show($id)
    {
        //
    }
   
    public function update(Request $request, $id)
    {
        $request = $request->all();
        $products = Product::find($id);
        $products->update($request);

        return redirect('products');
    }

   
    public function destroy($id)
    {
        $pruduct = Product::find($id);
        
        $pruduct->delete();
 
        return redirect('products');
    }
}
