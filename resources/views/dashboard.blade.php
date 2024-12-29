<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.9.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.9.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/newlogo-128x128-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Dashboard</title>
  <link rel="stylesheet" href="('assets/web/assets/mobirise-icons2/mobirise2.css' )">
  <link rel="stylesheet" href="('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap.min.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-grid.min.css')">
  <link rel="stylesheet" href="('assets/bootstrap/css/bootstrap-reboot.min.css')">
  <link rel="stylesheet" href="('assets/dropdown/css/style.css')">
  <link rel="stylesheet" href="('assets/socicon/css/styles.css')">
  <link rel="stylesheet" href="('assets/theme/css/style.css')">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
  <link rel="preload" as="style" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}"><link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

<style>
           .btn {
            display: inline-block;
            padding: 5px 5px;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .btn-common {
        font-size: 15px; /* Adjust the font size as needed */
        width: 150px; /* Adjust the width as needed */
        margin-right: 10px; /* Add space between buttons */
         }

        .btn-primary {
            background-color: #000000;
        }

        <style>
        /* Add your additional styles here */

        /* Style for the container */
        .slider-container {
            max-width: 1200px;
            margin: auto;
            overflow: hidden;
        }

        /* Style for the images */
        .slider-img {
            width: 100%;
            height: auto;
            display: none;
        }

        /* Add more styles as needed */

        /* Style for the admin section */
        .admin-section {
            background-color: #fff;
            overflow: hidden;
            margin: auto;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        /* Style for the button */
        .admin-button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }

        .btn-large {
    font-size: 18px; /* Adjust the font size as needed */
    padding: 25px 15px; /* Adjust padding to increase button size */
}
        
        </style>
<x-app-layout> 
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"> 
            {{ __('Dashboards') }} 
            
        </h2> 
    </x-slot> 
 
    {{-- @if(auth()->guard('web')->check() && auth()->user()->role != 'admin')  
    <div class="py-12"> 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900"> 
                    {{ __("Hi, im customer!") }} 
                    <br><br> 
                    <a class="btn btn-primary btn-common" href="{{ route('index-scarve') }}">Go To Homepage</a><br> <br>
                    <a class="btn btn-primary btn-common" href="{{ route('index-order') }}">Check Your Order</a>
                </div>  
            </div> 
        </div> 
    </div> 
    @endif  --}}
    {{-- @if(auth()->guard('web')->check() && auth()->user()->role == 'staff')  
    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900">  
                    {{ __("Im staff!") }} 
                    <br><br>  
                    <a href="{{ route('dashboard-staff') }}">
    <button style="background-color: blue; color: white;">Go to Staff page</button>
</a>
                    <br><br>  
                    
                   
                </div> 
            </div> 
        </div>  
    </div> 
    @endif  --}}

    @if(auth()->guard('web')->check() && auth()->user()->role == 'staff')  
    <div class="admin-section" style="display: flex; align-items: center; justify-content: center;">
        <!-- Table for Picture and Sentences -->
        <table style="width: 80%; text-align: center;">
            <tr>
                <td style="text-align: center;">
                    <img src="assets/images/staff.png" alt="Welcome" style="height: 21.0rem; margin-right: 160px; display: block; margin-left: auto; margin-right: auto;">
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ __("Hi, I'm a staff!") }}</p>
                </td>
            </tr>
        </table>

        <!-- Table for Buttons -->
        <table style="width: 70%; text-align: center;">
            <tr>
                {{-- <td>
                    <ul class="box-info">
			
                        <li>
                            <i class='bx bxs-group' ></i>
                            <span class="text">
                            <h3>{{ $productCount }}</h3>
                                <p>Order</p>
                            </span>
                        </li>
                    </ul>
                </td> --}}
            </tr>
            <tr>
                <td>
                    <br>
                    <a class="btn btn-primary btn-common btn-large" href="{{ route('dashboard-staff') }}">Go to Staff Page</a>
                </td>
            </tr>
        </table>
    </div>
    @endif 

    @if(auth()->guard('web')->check() && auth()->user()->role == 'customer')
    <div class="admin-section" style="display: flex; align-items: center; justify-content: center;">
        <!-- Table for Picture and Sentences -->
        <table style="width: 80%; text-align: center;">
            <tr>
                <td style="text-align: center;">
                    <img src="assets/images/customer.png" alt="Welcome" style="height: 21.0rem; margin-right: 160px; display: block; margin-left: auto; margin-right: auto;">
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ __("Hi, I'm a customer!") }}</p>
                </td>
            </tr>
        </table>

        <!-- Table for Buttons -->
        <table style="width: 70%; text-align: center;">
            <tr>
                <td>
                    <a class="btn btn-primary btn-common btn-large" href="{{ route('index-scarve') }}">Go To Homepage</a>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <a class="btn btn-primary btn-common btn-large" href="{{ route('view-order') }}">Check Your Order</a>
                </td>
            </tr>
        </table>
    </div>
@endif

    @if(auth()->guard('web')->check() && auth()->user()->role == 'admin')  
    <div class="admin-section" style="display: flex; align-items: center; justify-content: center;">
        <!-- Table for Picture and Sentences -->
        <table style="width: 80%; text-align: center;">
            <tr>
                <td style="text-align: center;">
                    <img src="assets/images/admin.png" alt="Welcome" style="height: 21.0rem; margin-right: 160px; display: block; margin-left: auto; margin-right: auto;">
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{ __("Hi, I'm a admin!") }}</p>
                </td>
            </tr>
        </table>

        <!-- Table for Buttons -->
        <table style="width: 70%; text-align: center;">
            <tr>
                <td>
                    <a class="btn btn-primary btn-common btn-large" href="{{ route('dashboard-admin') }}">Go To Admin Page</a>
                </td>
            </tr>

        </table>
    </div>
    @endif      


    {{-- @if(auth()->guard('web')->check() && auth()->user()->role == 'admin')  
    <div class="py-12">  
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"> 
                <div class="p-6 text-gray-900">  
                    {{ __("Im admin!") }} 
                    <br><br>  
                    <a href="{{ route('dashboard-admin') }}">
    <button style="background-color: blue; color: white;">Go to Admin page</button>
</a>
                    <br><br>  
                    
                   
                </div> 
            </div> 
        </div>  
    </div> 
    @endif  --}}


</x-app-layout>
