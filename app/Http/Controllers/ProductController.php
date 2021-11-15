<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;

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

    //add to cart function
    public function addToCart(Request $request){
        if($request->session()->has('user')){
            // return "hello this is a test page";
            $cart = new cart;
            $cart->user_id=$request->session()
            ->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
        
    }

    //show cart items in the cart menu
    public static function cartItem(){
        $userId=Session::get('user')['id'];
        return cart::where('user_id', $userId)->count();
    }
}
