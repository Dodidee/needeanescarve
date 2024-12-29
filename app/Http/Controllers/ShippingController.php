<?php

namespace App\Http\Controllers;
use App\Models\Shipping;
use App\Models\Customer;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShippingController extends Controller
{
     //view shipping 
    public function index(){ 
        //if (Auth::id()){
        $d['model']=Shipping::get();// yang ni dia tarik dari model
        return view ('Shipping.index',$d); //customer ni akan tarik index dalam folder customer dekat views
     }

    //dia akan pergi ke page yang ada form--kita letak nanti
    public function createform(){
        return view ('Shipping.create');
    }

    // create Shipping
    public function create(Request $request){
        $user=Auth::User();
        $model=new Shipping;
        $model->ship_name=$request->ship_name;
        $model->ship_phoneNo=$request->ship_phoneNo;
        $model->ship_address=$request->ship_address;
        $model->ship_city=$request->ship_city;
        $model->ship_state=$request->ship_state;
        $model->ship_code=$request->ship_code; 
        $model ->user_id = $user->id;   
        
        $model->save();
        return redirect()->route('index-shipping');
    }

    public function updateform($id){
        $d['model']=Shipping::where('ship_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Shipping.update',$d);
    }

    // update product
    public function update(Request $request,$id){
        $model=Shipping::where('prod_id',$id)->first();
        $model->update([
            'ship_name'=>$request->ship_name,
            'ship_phoneNo'=>$request->ship_phoneNo,
            'ship_address'=>$request->ship_address,
            'ship_code'=>$request->ship_code,
            'ship_city'=>$request->ship_city,
            'ship_state'=>$request->ship_state,
        ]);
        
        
        $model->save();
        return redirect()->route('index-product');
    }

    public function delete($id){
        Shipping::where('ship_id',$id)->delete();
        return redirect()->route('index-shipping');
    }

    // ShippingController.php

public function submitCreateShipping(Request $request)
{
    // Validate the form data
    $request->validate([
        'ship_name' => 'required',
        'ship_phoneNo' => 'required|numeric',
        'ship_address' => 'required',
        'ship_code' => 'required|numeric',
        'ship_city' => 'required',
        'ship_state' => 'required',
    ]);

    // Check if a shipping address already exists for the user
    $existingShippingAddress = shipping::where('user_id', auth()->id())->first();

    if ($existingShippingAddress) {
        // A shipping address already exists, you can redirect back with an error message
        return redirect()->back()->with('error', 'You already have a shipping address.');
    }

    $existingAddress = auth()->user()->shippingAddress;

    if ($existingAddress) {
        // User already has an address, return a response or redirect with a message
        return redirect()->back()->with('error', 'You already have an existing shipping address.');
    }

    // Create a new shipping address
    shipping::create([
        'user_id' => auth()->id(),
        'ship_name' => $request->input('ship_name'),
        'ship_phoneNo' => $request->input('ship_phoneNo'),
        'ship_address' => $request->input('ship_address'),
        'ship_code' => $request->input('ship_code'),
        'ship_city' => $request->input('ship_city'),
        'ship_state' => $request->input('ship_state'),
    ]);

    // Redirect with a success message
    return redirect()->route('success')->with('success', 'Shipping address added successfully.');
    }

    // public function viewAddress()
    // { 
    //     if (Auth::id()){
    //         $id=Auth::User()->id;
    //         $shipping=Shipping::where('user_id','=',$id)->get();
    //         return view('shipping.viewAddress');
    //     }
    // }

    public function viewAddress($id){
        $d['model']=Shipping::where('ship_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Shipping.viewAddress',$d);
    }

    

    


}
