<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\CustomerController as Authenticatable;

class CustomerController extends Controller
{
     //view customer dalam bentuk table
     public function index(){ 
        $d['model']=Customer::get();// yang ni dia tarik dari model
        return view ('Customer.index',$d); //customer ni akan tarik index dalam folder customer dekat views
     }

    //dia akan pergi ke page yang ada form--kita letak nanti
    public function createform(){
        return view ('Customer.create');
    }

    // create Customer
    public function create(Request $request){
        $model=new Customer;
        $model->username=$request->username;
        $model->cust_email=$request->cust_email;
        $model->cust_Fname=$request->cust_Fname;
        $model->cust_phoneNo=$request->cust_phoneNo;
        $model->cust_password=$request->cust_password;
        $model->save();
        return redirect()->route('index-customer');
    
    }

    public function updateform($id){
        $d['model']=Customer::where('cust_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Customer.update',$d);
    }

     // update customer
     public function update(Request $request,$id){
        $model=Customer::where('cust_id',$id)->first();
        $model->update([
            'username'=>$request->username,
            'cust_email'=>$request->cust_email,
            'cust_Fname'=>$request->cust_Fname,
            'cust_phoneNo'=>$request->cust_phoneNo,
            'cust_password'=>$request->cust_password,
        ]);

        $model->save();
        return redirect()->route('index-customer');
    }

    public function delete($id){
        Customer::where('customer_id',$id)->delete();
        return redirect()->route('index-customer');
    }


    public function viewProducts()
    {
        $products = Product::all();
        return view('Customer.view-products',  compact('products'));
    }

    public function viewindex()
    { 
        return view('Scarve.index');
    }

    public function ourstory()
    { 
        return view('Scarve.ourStory');
    }

    public function blueyellow()
    { 
        return view('Scarve.blue-yellow');
    }

    public function redgreen()
    { 
        return view('Scarve.red-green');
    }

    public function totalblind()
    { 
        return view('Scarve.totalBlind');
    }
 
    public function whycontrast()
    { 
        return view('Scarve.whyContrast');
    }

    public function stepcontrast()
    { 
        return view('Scarve.stepContrast');
    }

    public function contrast()
    { 
        return view('contrast');
    }

    public function colourblind()
    { 
        return view('Scarve.colourBlind');
    }

    public function header()
    { 
        return view('header');
    }

    public function allCollection()
    { 
        return view('Scarve.allCollection');
    }

    public function thankyou()
    { 
        return view('Scarve.thankyou');
    }

    


    



}
