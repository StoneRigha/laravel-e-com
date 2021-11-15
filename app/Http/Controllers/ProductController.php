<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // index function
    public function index(){
        
        $data = Product::all();


        return view('product', ['products'=>$data]);
    }
    
    //details function
    public function detail($id){
        $data = Product::find($id);
        return view('detail', ['products'=>$data]);
    }

    //search function
    public function search(Request $request){
        // return $request->input();
       $data = Product::
       where('name', 'like', '%'. $request->input('query').'%')
       ->get();
       return view('search', ['products'=>$data]);
    }

}
