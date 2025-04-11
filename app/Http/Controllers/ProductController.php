<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(){

    }
    public function create(){
     return view('admin.products.create');
    }
    public function store(Request $request){
        
        $data = $request->validate([
            'name'=>'required|string|max:255',
            'desc'=>'required|string',
            'price'=>'required|numeric',
            'quantity'=>'required|integer|min:1',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        if($request->hasFile('image')){
            $data['image']=Storage::putFile('products',$request->file('image'));
        }
        Product::create($data);
        return redirect()->back()->with('success','Product Created Successfully');
    }
    
}
