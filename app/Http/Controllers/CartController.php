<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
//use App\Models\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function indexcart(){ 
        if (Auth::id()){
            $id=Auth::User()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view ('Cart.index',compact('cart'));
        }
        else{
            return redirect('login');

        }

        

    }
    
    public function add_cart(Request $request, $id){
        if(Auth::id()){
            $user=Auth::User();
            $product= Product::find($id);
            $model=new Cart;
            $model->prod_name = $product->prod_name;
            $model->prod_price = $product->prod_price;
            $model->prod_image = $product->prod_image;
            $model->user_id = $user->id;
            $model->cart_quantity = $request->cart_quantity;
            $model->save();

        return redirect()->route('index-cart');
          
        // return redirect()->back();    

        //return view('Cart.index');  
        } 
        
    }

    public function delete($id){
        Cart::where('cart_id',$id)->delete();
        return redirect()->route('index-cart');
    }
    
    public function viewCart()
    { 
        if (Auth::id()){
            $id=Auth::User()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('cart');
        }
    }


    



























    //dia akan pergi ke page yang ada form--kita letak nanti
    //public function createform(){
       // return view ('Cart.create');
    //}



    

     // update customer
     //public function update(Request $request,$id){
        //$model=Cart::where('cart_id',$id)->first();
        //$model->update([
            //'prod_name'=>$request->prod_name,
           //'prod_price'=>$request->prod_price,
            //'prod_image'=>$request->prod_image,
        //]);

       // $model->save();
      //  return redirect()->route('index-cart');
    //}

    
    //public function index()
    //{
        //$cart = Product::get();
        //return view('Cart.index.view-products',  compact('cart'));
    //}
}
