<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MobiriseControllerOne;
use App\Models\Product;
use App\Models\Staff;
use App\Models\Customer;
use App\Models\Admin;
use App\Models\Cart;
use App\Models\Shipping;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//route untuk product
Route::get('index-product', [ProductController::class, 'index'])->name('index-product'); //route untuk view

Route::get('create-product', [ProductController::class, 'createform'])->name('createform-product'); //route untuk create form

Route::post('submit-create-product', [ProductController::class, 'create'])->name('submit-create-product'); //route untuk create

Route::get('updateform-product/{id}', [ProductController::class, 'updateform'])->name('updateform-product');

Route::get('detailProduct-product/{id}', [ProductController::class, 'detailProduct'])->name('detailProduct-product');//untuk update form //gune get sebab nak tarik id

Route::get('detail2-product/{id}', [ProductController::class, 'detail2'])->name('detail2-product');

Route::get('viewOrder-product/{id}', [ProductController::class, 'viewOrder'])->name('viewOrder-product');//untuk update form //gune get sebab nak tarik id

Route::get('staff-order/{id}', [ProductController::class, 'staffOrder'])->name('staff-order');//untuk update form //gune get sebab nak tarik id

Route::post('update-product/{id}', [ProductController::class, 'update'])->name('update-product');

Route::get('delete-product/{id}', [ProductController::class, 'delete'])->name('delete-product');

Route::get('moreinfo/{id}', [ProductController::class, 'moreinfo'])->name('moreinfo');//untuk update form //gune get sebab nak tarik id



//route untuk staff
Route::get('index-staff', [StaffController::class, 'index'])->name('index-staff'); //route untuk view

Route::get('create-staff', [StaffController::class, 'createform'])->name('createform-staff'); //route untuk create form

Route::post('submit-create-staff', [StaffController::class, 'create'])->name('submit-create-staff'); //route untuk create

Route::get('updateform-staff/{id}', [StaffController::class, 'updateform'])->name('updateform-staff');//untuk update form //gune get sebab nak tarik id

Route::post('update-staff/{id}', [StaffController::class, 'update'])->name('update-staff');

Route::get('delete-staff/{id}', [StaffController::class, 'delete'])->name('delete-staff');

Route::get('dashboard-staff', [StaffController::class, 'dashboard'])->name('dashboard-staff'); //route untuk dashboard



//route untuk customer
Route::get('index-customer', [CustomerController::class, 'index'])->name('index-customer'); //route untuk view

Route::get('create-customer', [CustomerController::class, 'createform'])->name('createform-customer'); //route untuk create form

Route::post('submit-create-customer', [CustomerController::class, 'create'])->name('submit-create-customer'); //route untuk create

Route::get('updateform-customer/{id}', [CustomerController::class, 'updateform'])->name('updateform-customer');//untuk update form //gune get sebab nak tarik id

Route::post('update-customer/{id}', [CustomerController::class, 'update'])->name('update-customer');

Route::get('delete-customer/{id}', [CustomerController::class, 'delete'])->name('delete-customer');

Route::get('view-products', [CustomerController::class, 'viewProducts'])->name('view-products'); //view product untuk customer

Route::get('index-scarve', [CustomerController::class, 'viewindex'])->name('index-scarve');

Route::get('ourStory', [CustomerController::class, 'ourstory'])->name('ourStory');

Route::get('red-green', [CustomerController::class, 'redgreen'])->name('red-green');

Route::get('blue-yellow', [CustomerController::class, 'blueyellow'])->name('blue-yellow');

Route::get('totalBlind', [CustomerController::class, 'totalblind'])->name('totalBlind');

Route::get('whyContrast', [CustomerController::class, 'whycontrast'])->name('whyContrast');

Route::get('stepContrast', [CustomerController::class, 'stepcontrast'])->name('stepContrast');

Route::get('contrast', [CustomerController::class, 'contrast'])->name('contrast');

Route::get('colourBlind', [CustomerController::class, 'colourblind'])->name('colourBlind');

Route::get('thankyou', [CustomerController::class, 'thankyou'])->name('thankyou');

Route::get('header', [CustomerController::class, 'header'])->name('header');

Route::get('allCollection', [CustomerController::class, 'allCollection'])->name('allCollection');



//route untuk admin dashboard
Route::get('index-admin', [AdminController::class, 'index'])->name('index-admin'); //route untuk view

Route::get('dashboard-admin', [AdminController::class, 'dashboard'])->name('dashboard-admin'); //route untuk dashboard


//route untuk shipping
Route::get('index-shipping', [ShippingController::class, 'index'])->name('index-shipping'); //route untuk view

Route::get('create-shipping', [ShippingController::class, 'createform'])->name('createform-shipping'); //route untuk create form

Route::get('viewAddress-shipping/{id}', [ShippingController::class, 'viewAddress'])->name('viewAddress-shipping'); //route untuk create form

Route::post('submit-create-shipping', [ShippingController::class, 'create'])->name('submit-create-shipping'); //route untuk create

Route::get('updateform-shipping/{id}', [ShippingController::class, 'updateform'])->name('updateform-shipping');//untuk update form //gune get sebab nak tarik id

Route::post('update-shipping/{id}', [ShippingController::class, 'update'])->name('update-shipping');

Route::get('delete-shipping/{id}', [ShippingController::class, 'delete'])->name('delete-shipping');



//route untuk cart
Route::get('index-cart', [CartController::class, 'indexcart'])->name('index-cart'); //route untuk view

Route::post('add_cart/{id}', [CartController::class, 'add_cart'])->name('add_cart');

Route::get('delete-cart/{id}', [CartController::class, 'delete'])->name('delete-cart'); 



//route untuk order
Route::get('index-order', [OrderController::class, 'index'])->name('index-order'); //route untuk view

Route::get('index-order', [OrderController::class, 'indexorders'])->name('index-order'); //route untuk view

Route::get('view-order', [OrderController::class, 'vieworder'])->name('view-order'); //route untuk view

Route::get('index-order', [OrderController::class, 'index2'])->name('index-order'); //route untuk view

Route::post('submit-order', [OrderController::class, 'submitOrder'])->name('submit-order');

Route::get('staff-order', [OrderController::class, 'stafforders'])->name('staff-order'); //route untuk view

Route::get('order-status', [OrderController::class, 'createform'])->name('order-status'); //route untuk create form

Route::get('orderdetails/{id}', [OrderController::class, 'orderdetails'])->name('orderdetails'); //route untuk create form

Route::get('viewaddress', [OrderController::class, 'index'])->name('viewaddress'); //route untuk view

// Route::get('delete-order/{id}', [OrderController::class, 'delete'])->name('delete-order');

Route::delete('delete-order/{id}', [OrderController::class, 'delete'])->name('delete-order');


Route::post('order-status/{order_id}', [OrderController::class, 'update'])->name('order-status');

Route::get('updateform-status/{order_id}', [OrderController::class, 'updateform'])->name('updateform-status');

Route::post('update-status/{id}', [OrderController::class, 'updateStatus'])->name('update-status');

Route::post('/update-status/{id}', [OrderController::class, 'updateStatus'])->name('update-status');

Route::get('view-order', [OrderController::class, 'vieworders'])->name('view-order'); //route untuk view

// Route::post('/submit-order', [OrderController::class, 'store'])->name('submit-order'); // Adjust route and controller names as needed


//test test
Route::post('order-status/{order_id}', [OrderController::class, 'update'])->name('order-status');
Route::get('updateform-status/{order_id}', [OrderController::class, 'updateform'])->name('updateform-status');


// Route::get('updateform-status/{id}', [OrderController::class, 'updateform'])->name('updateform-status');//untuk update form //gune get sebab nak tarik id

// Route::post('order-status/{id}', [StaffController::class, 'update'])->name('order-status');


// Route::put('/update-order-status/{id}', [OrderController::class, 'updateStatus']);

// Route::get('view-order', [OrderController::class, 'order'])->name('view-order'); //route untuk view
Route::get('create2-product', [ProductController::class, 'createform2'])->name('createform2-product'); //route untuk create form

Route::get('submit-product', [ProductController::class, 'create2'])->name('submit-product'); //route untuk create
Route::delete('/cart/delete/{id}', [OrderController::class,'delete'])->name('cart.delete');


































//Route::get('create-cart', [CartController::class, 'createform'])->name('createform-cart'); //route untuk create form

//Route::get('updateform-cart/{id}', [CartController::class, 'updateform'])->name('updateform-cart');//untuk update form //gune get sebab nak tarik id

//Route::post('update-cart/{id}', [CartController::class, 'update'])->name('update-cart');

//Route::get('delete-cart/{id}', [ShippingController::class, 'delete'])->name('delete-cart');

// add to cart

//Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('cart.add');

//Route::get('cart', [ProductController::class, 'viewCart'])->name('cart.index');

// Define a route for the search
//Route::get('/admin/search', 'AdminController@search')->name('admin.search');//tak bearap menjadi

// Use this route to display the search form
//Route::get('/admin', 'AdminController@index')->name('admin.index');//tak menjadi

// route untuk order
//Route::get('index-order', [OrderController::class, 'index'])->name('index-order'); //route untuk view

//Route::get('create-order', [OrderController::class, 'createform'])->name('createform-order'); //route untuk create form

//Route::post('submit-create-order', [OrderController::class, 'create'])->name('submit-create-order'); //route untuk create

//Route::post('update-order/{id}', [OrderController::class, 'update'])->name('update-order');

//Route::get('delete-order/{id}', [OrderController::class, 'delete'])->name('delete-order');

// view cart

//Route::get('index-cart', [CartController::class, 'index'])->name('index-cart'); //route untuk view

//Route::get('create-cart', [CartController::class, 'createform'])->name('createform-cart'); //route untuk create form

//Route::post('submit-create-cart', [CartController::class, 'create'])->name('submit-create-cart'); //route untuk create

//Route::get('updateform-product/{id}', [CartController::class, 'updateform'])->name('updateform-product');//untuk update form //gune get sebab nak tarik id

//Route::post('update-product/{id}', [CartController::class, 'update'])->name('update-product');

//Route::get('delete-product/{id}', [ProductContrCartControlleroller::class, 'delete'])->name('delete-product');