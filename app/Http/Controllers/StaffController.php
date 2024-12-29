<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Staff;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StaffController extends Controller
{
     //view staff dalam bentuk table
     public function index(){ 
        $d['model']=Staff::get();// yang ni dia tarik dari model
        return view ('Staff.index',$d); //staff ni akan tarik index dalam folder staff dekat views

        // Retrieve staff data with pagination
        $model = Staff::paginate(11);

        // Return the view with the staff data
        return view('index-staff', compact('model'));
     }

     
    //dia akan pergi ke page yang ada form--kita letak nanti
    public function createform(){
        return view ('Staff.create');
    }

    // create staff
    public function create(Request $request){
        $model=new Staff;
        $model->username=$request->username;
        $model->staff_Fname=$request->staff_Fname;
        $model->staff_email=$request->staff_email;
        $model->staff_phoneNo=$request->staff_phoneNo;
        $model->staff_password=$request->staff_password;
        $model->save();
        return redirect()->route('index-staff');
    }

    public function updateform($id){
        $d['model']=Staff::where('staff_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Staff.update',$d);
    }

     // update staff
     public function update(Request $request,$id){
        $model=Staff::where('staff_id',$id)->first();
        $model->update([
            'username'=>$request->username,
            'staff_Fname'=>$request->staff_Fname,
            'staff_email'=>$request->staff_email,
            'staff_phoneNo'=>$request->staff_phoneNo,
            'staff_password'=>$request->staff_password,
        ]);

        $model->save();
        return redirect()->route('index-staff');
    }

    public function delete($id){
        Staff::where('staff_id',$id)->delete();
        return redirect()->route('index-staff');
    }

    public function dashboard()
    {
        $productCount = Product::count();
        
        return view('Staff.dashboard', compact('productCount'));
    }

    public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('username', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed
        return redirect()->intended('/dashboard');
    }

    // Authentication failed
    return back()->withErrors(['message' => 'Invalid login credentials']);
}

public function logout()
{
    Auth::logout();
    return redirect('/login');
}
}
