<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){
      return view('admin.products.index')->with('products',Product::all());
    }
    public function create(){
     return view('admin.products.create');
    }
    public function store(ProductRequest $request){
        $data = $request->validated();
  
        if($request->hasFile('image')){
            $data['image']=Storage::putFile('products',$request->file('image'));
        }
        Product::create($data);
        flash('Branch has been updated successfully!')->success();
        return redirect('products');
    }
    
}
