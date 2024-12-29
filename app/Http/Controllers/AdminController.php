<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Staff;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //view customer dalam bentuk table
    public function index(){ 
        $d['model']=Admin::get();// yang ni dia tarik dari model
        return view ('Admin.index',$d); //customer ni akan tarik index dalam folder admin dekat views
     }

     public function register(){ 
        $d['model']=Admin::get();// yang ni dia tarik dari model
        return view ('register',$d); //customer ni akan tarik index dalam folder admin dekat views
     }

      //dia akan pergi ke page yang ada form--kita letak nanti
    public function createform(){
        return view ('Admin.create');
    }

    // create Customer
    public function create(Request $request){
        $model=new Admin;
        $model->username=$request->username;
        $model->admin_email=$request->admin_email;
        $model->admin_password=$request->admin_password;
        $model->save();
        return redirect()->route('index-admin');
    
    }

     public function dashboard()
    {
        $productCount = Product::count();
        $staffCount = Staff::count();
        
        return view('Admin.dashboard', compact('productCount', 'staffCount'));
    }
 
public function submitCreateProduct(Request $request)
{

    return redirect()->route('admin.dashboard'); // Redirect to admin dashboard
}

public function search(Request $request)
    {
         // Get the search query from the request
         $query = $request->input('query');

         // Perform a search in your database based on the $query
         $searchResults = Admin::where('Admin', 'like', '%' . $query . '%')
           ->get();

        // Return the view with the search results
        return view('Admin.search', ['results' => $searchResults]);
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
