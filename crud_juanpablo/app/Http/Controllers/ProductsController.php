<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    //
    public function index(){

      $products = Product::all();

      return view('products.index',compact('products'));
    }

    public function create(){
      return view('products.create');
    }

    public function store(Request $request){
      $product = new Product();

      $product->name = $request->name;
      $product->brand = $request->brand;
      $product->description = $request->description;
      $product->price = $request->price;
      $product->size = $request->size;

      $product->save();
      return redirect()->route('products.index');
    }

    public function update(Request $request,$id){
      $product= Product::find($id);
      $product->update($request->all());
      return redirect()->route('products.index');
    }

    public function edit($id){
      $product = Product::find($id);
      return view('products.edit',compact('product'));
    }

    public function destroy($id){
      $product =Product::find($id);
      $product ->delete();
      return redirect()->route('products.index');
    }
}
