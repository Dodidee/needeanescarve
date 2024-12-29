<?php
// OrderController.php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Models\Shipping;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function vieworder()
    {
        if (Auth::check()) {
            $id = Auth::id();
            $cart = Cart::where('user_id', $id)->get();
            $shipping = Shipping::where('user_id', $id)->first();
            $orders = Order::where('order_id', $id)->get();
            
            return view('Order.view-order', compact('cart', 'shipping', 'orders'));
        } else {
            return redirect('login');
        }
    }


    // public function stafforder(){ 
    //     if (Auth::id()){
    //         $id=Auth::User()->id;
    //         $cart=Cart::where('user_id','=',$id)->get();
    //         // $d['model']=Shipping::where('ship_id',$id)->first();
    //         return view ('Order.view-order',compact('cart'));
    //     }
    //     else{
    //         return redirect('login');

    //     }

    // }

    public function index2(){ 
        $d = []; 
     
        if (Auth::check()) { 
            $id = Auth::user()->id;  
            $d['model'] = Order::where('user_id', $id)->get(); 
        } 
        

        $cart = Cart::latest()->first(); 
     
        if ($cart) { 
            $cart_id = $cart->cart_id;  
            $d['model'] = Order::where('cartid', $cart_id)->get(); 
        } 

        $shipping = Shipping::latest()->first(); 
     
        if ($shipping) { 
            $ship_id = $shipping->ship_id;  
            $d['model'] = Order::where('shipid', $ship_id)->get(); 
        } 

        return view('Order.index', $d); 
    } 

    
    public function submitOrder(Request $request) 
{ 
    $user = Auth::user();
    $cart = Cart::latest()->first();; // Retrieve the latest Cart record
    $shipping = Shipping::latest()->first(); // Retrieve the latest Shipping record

    $model = new Order;  
    $model->order_status = $request->order_status;  
    // $model->created_at = $request->created_at;  
    $model->user_id = $user->id; 
    // $model->staffid =  $staff->staffid;
    
    // Save the model first 
    $model->save(); 

    $cart = Cart::latest()->first();;
    if ($cart) { 
        $model->cartid = $cart->cart_id; 
        $model->save(); 
    } 

    $shipping = Shipping::latest()->first();
    if ($shipping) { 
        $model->shipid = $shipping->ship_id; 
        $model->save(); 
    } 

        // $request->validate([
        //     'order_payment' => 'required|image|mimes:png|max:2048', // Adjust file validation rules as needed
        // ]);

        // if ($request->hasFile('order_payment')) {
        //     $file = $request->file('order_payment');
        //     $filename = time() . '.' . $file->getClientOriginalExtension();
        //     $path = $file->move(public_path('images'), $filename);
        //     $order = new Order();
        //     $order->order_payment = $filename;
        //     $order->save();
        // }

    return redirect()->route('thankyou');  
}

public function updateStatus(Request $request, $id)
{
    // Find the order by ID
    $order = Order::findOrFail($id);

    // Validate the request data
    $request->validate([
        'order_status' => 'required|in:pending,processing,completed,cancelled', // Add more status options as needed
    ]);

    // Update the order status
    $order->order_status = $request->input('order_status');
    $order->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Order status updated successfully!');
    
}

public function showOrderPage($id)
{
    $order = Order::findOrFail($id);
    return view('page', ['order' => $order]);
}


public function stafforder()
{ 
    if (Auth::id()) {
        $id = Auth::User()->id;
        $cart = Cart::where('user_id', '=', $id)->get();
        $orders = Order::where('user_id', '=', $id)->get(); // Fetch orders for the user
        $order_payment = Order::all();

        return view('Order.staff-order', compact('cart', 'orders','order_payment'));
    } else {
        return redirect('login');
    }
}



public function orderdetails($id)
{
    if (Auth::id()) {
        $user_id = Auth::user()->id;
        $order = Order::where('user_id', $user_id)
            ->where('order_id', $id)
            ->with(['user', 'cart', 'shipping']) // Eager load relationships
            ->first();

        if ($order) {
            return view('Order.staff-order', compact('order'));
        } else {
            // Handle case where order is not found
            // You can redirect or show an error message
        }
    } else {
        return redirect('login');
    }
}





public function createform(){
    return view ('Order.order-status');
}

// create product
public function create(Request $request){
    $model=new Order;
    $model->order_status=$request->order_status;

    $model->save();
    return redirect()->route('order_status');
}

public function updateform($order_id){
    $d['model'] = Order::where('order_id', $order_id)->first();
    return view('Order.status-order', $d);
}

    public function stafforders(){ 
        $d['model']=Order::get(); 
        return view('Order.staff-order',$d); //folder Vehicle+index3.blade 
    } 

    public function vieworders(){ 
        // Check if the user is authenticated
        if(auth()->check()) {
            // Get the authenticated user's ID
            $id = auth()->user()->id;
    
            // Retrieve orders associated with the authenticated user
            $d['model'] = Order::where('user_id', $id)->get(); 
            return view('Order.view-order', $d); //folder Vehicle+index3.blade 
        } else {
            // Redirect the user to the login page if not authenticated
            return redirect()->route('login')->with('error', 'Please login to view your orders.');
        }
    } 
    
    public function index()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            $shipping = Shipping::where('user_id', '=', $id)->first(); // Fetch shipping details for the user
    
            return redirect()->route('thankyou'); // Redirect to the thank you page
        } else {
            return redirect('login');
        }
    }


public function delete($id){
    Order::where('order_id',$id)->delete();
    return redirect()->route('staff-order');
}


}
