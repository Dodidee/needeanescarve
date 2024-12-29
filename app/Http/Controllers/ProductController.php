<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //view product dalam bentuk table
    public function index(){ 
       $d['model']=Product::get();// yang ni dia tarik dari model
       return view ('Product.index',$d); //product ni akan tarik index dalam folder product dekat views
    }

    public function moreinfo($id){
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.moreinfo',$d);
    }

    //dia akan pergi ke page yang ada form--kita letak nanti
    public function createform(){
        return view ('Product.create');
    }

    // create product
    public function create(Request $request){
        $model=new Product;
        $model->prod_name=$request->prod_name;
        $model->prod_price=$request->prod_price;
        $model->prod_desc=$request->prod_desc;
        $model->prod_desc1=$request->prod_desc1;
        $model->prod_desc2=$request->prod_desc2;
        $model->prod_quantity=$request->prod_quantity;
        if($request->hasFile('prod_image')){ 
            $file=$request->file('prod_image'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image = $filename; //bawa image ke dalam folder public(images) & database
        }

        if($request->hasFile('prod_image2')){ 
            $file=$request->file('prod_image2'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'2.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image2 = $filename; //bawa image ke dalam folder public(images) & database
        }

        if($request->hasFile('prod_image3')){ 
            $file=$request->file('prod_image3'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'3.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image3 = $filename; //bawa image ke dalam folder public(images) & database
        }

        if($request->hasFile('prod_image4')){ 
            $file=$request->file('prod_image4'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'4.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image4 = $filename; //bawa image ke dalam folder public(images) & database
        }
        $model->save();
        return redirect()->route('index-product');
    }

    public function updateform($id){
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.update',$d);
    }

    // update product
    public function update(Request $request,$id){
        $model=Product::where('prod_id',$id)->first();
        $model->update([
            'prod_name'=>$request->prod_name,
            'prod_price'=>$request->prod_price,
            'prod_desc'=>$request->prod_desc,
            'prod_quantity'=>$request->prod_quantity,
            'prod_desc1'=>$request->prod_desc1,
            'prod_desc2'=>$request->prod_desc2,
        ]);

        if($request->hasFile('prod_image')){ 
            $file=$request->file('prod_image'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image = $filename; //bawa image ke dalam folder public(images) & database
        }

        elseif($request->hasFile('prod_image2')){ 
            $file=$request->file('prod_image2'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image2 = $filename; //bawa image ke dalam folder public(images) & database
        }

        elseif($request->hasFile('prod_image3')){ 
            $file=$request->file('prod_image3'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image3 = $filename; //bawa image ke dalam folder public(images) & database
        }

        elseif($request->hasFile('prod_image4')){ 
            $file=$request->file('prod_image4'); 
            $extension=$file->getClientOriginalExtension(); //generate unique filename 
            $filename = time().'.'.$extension; //dia akan convertkan gambar ke unique nama  
            $path = $file->move('images/', $filename); //nak move ke directory
            $model->prod_image4 = $filename; //bawa image ke dalam folder public(images) & database
        }
        
        $model->save();
        return redirect()->route('index-product');
    }

    public function delete($id){
        Product::where('prod_id',$id)->delete();
        return redirect()->route('index-product');
    }

    //untuk add to cart customer
    public function viewProduct()
    { 
        return view('product');
    }



    public function detailProduct($id){
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.detail-products',$d);
    }

    
    public function detail2($id){
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.detail2',$d);
    }

     public function viewOrder($id){ 
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.view-order',$d);
     }













     
    public function orderProduct($id){
        $product = Product::find($id);
    // Check if the product is found
    if ($product) {
        $cart = session()->get('cart', []);
        $cart[$id] = $product;
        session()->put('cart', $cart);

    } else {
        // Handle the case where the product is not found, e.g., redirect with an error message
        return redirect()->back()->with('error', 'Product not found');
    }

    return redirect()->route('orderProducts-product',['id' => $id]);
}

    public function showOrderProducts()
    {
        $cart = session()->get('cart', []);
        return view('Product.order-products', ['cart' => $cart]);
    }





    
    public function orderProductss($id){
        $d['model']=Product::where('prod_id',$id)->first();//analyze data cari then baru boleh update
        return view ('Product.order-products',$d);
    }



    public function orderProducts(Request $request,$id){
        $model=Product::where('prod_id',$id)->first();
        $model->update([
            'prod_name'=>$request->prod_name,
            'prod_price'=>$request->prod_price,
            'prod_desc'=>$request->prod_desc,
            'prod_quantity'=>$request->prod_quantity,
            'prod_image'=>$request->image,
        ]);
        
        $model->save();
        return redirect()->route('order-product');
    }

    public function indexOrder(){ 
        $d['model']=Product::get();// yang ni dia tarik dari model
        return view ('Product.indexOrder',$d); //product ni akan tarik index dalam folder product dekat views
     }
}