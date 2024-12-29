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
  
  
  <title>Your Cart</title>
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
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    h1 {
        text-align: center;
        font-size: 36px;
        color: #333;
        margin-top: 20px;
    }

    #dataTable {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    #dataTable th, #dataTable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }

    #dataTable th {
        background-color: #f2f2f2;
    }

    #dataTable tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .quantityInput {
        width: 40px;
        text-align: center;
    }

    .button-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn {
        padding: 8px 16px;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #dc3545;
        color: #fff;
        border: none;
    }

    #totalRow {
        font-weight: bold;
    }

    input {
        width: 30px; /* Adjust the width as needed */
        text-align: center;
    }

    .btn-common {
        background-color: #000000; /* Example blue color, you can change this */
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        position: fixed;
        bottom: 10px; /* Adjust the distance from the bottom as needed */
        right: 10px; /* Adjust the distance from the right as needed */
        display: inline-block;
    }

    .button-container {
            text-align: right;
        }


        .btn-primary {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #000000; /* Primary color */
            color: #fff; /* Text color */
            border: 1px solid #000000; /* Border color */
            border-radius: 5px; /* Rounded corners */
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Darker shade on hover */
            border-color: #0056b3;
        }

        h3 {
        text-align: center;
        }
</style>
<body>
<h1>YOUR CART</h1>

@if(count($cart) > 0)
<table class="table" id="dataTable">
    <thead>
        <tr>
            <th>NO</th>
            <th>IMAGE</th>
            <th>SCARVE NAME</th>
            <th>QUANTITY</th>
            <th>PRICE</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <!-- Your existing cart items -->
        <?php $totalPrice=0 ?>
        @php $totalQuantity = 0 @endphp
        @php $counter = 1 @endphp
        @foreach ($cart as $value)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>
                    <img id="galleryImage" src="{{ asset('images/'.$value->prod_image) }}" width="50"
                        alt="Product Image">
                </td>
                <td>{{ $value->prod_name }}</td>
                <td>
                    {{ $value->cart_quantity }}
                    @php $totalQuantity += $value->cart_quantity @endphp
                </td>
                <td class="price">{{ $value->cart_quantity * $value->prod_price}}.00</td>
                <td class="button-container">
                    <form action="{{ route('delete-cart', ['id' => $value->cart_id]) }}" method="get">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger " type="submit"
                                onclick="return confirm('Are you sure you want to delete this item?')">Remove
                        </button>
                    </form>
                </td>
            </tr>
            <?php $totalPrice += $value->cart_quantity * $value->prod_price ?>
            
        @endforeach
        <!-- Total row -->
        <tr id="totalRow">
            <td colspan="3"></td>
            {{-- <td>Quantity:</td>
            <td id="totalQuantity"></td> --}}
            <td>Total:</td>
            <td id="totalPrice">{{ $totalPrice }}.00</td>
            <td></td>
        </tr>
    
    </tbody>
</table>
@else
    <h3>No Cart</h3>
@endif

<div class="button-container">
    <a class="btn btn-primary" href="{{ route('view-products')}}">Back</a>
    
    <!-- Add conditional check for the checkout button -->
    @if(count($cart) > 0)
        <span style="margin-right: 10px;"></span>
        <a class="btn btn-primary" href="{{ route('index-shipping')}}" onclick="return showConfirmation()">Continue to Checkout</a>
    @endif
{{-- 
    // --}}


{{-- 
        <div class="button-container">
            <a class="btn btn-primary" href="{{ route('view-products')}}">Back</a>
            <span style="margin-right: 10px;"></span> <!-- Adjust the margin as needed -->
            <a class="btn btn-primary" href="{{ route('index-shipping')}}">Continue to Checkout</a>
        </div> --}}

        {{-- <form action="{{ route('submit-order') }}" method="post">
            @csrf
            <!-- Your existing cart items and total section here -->
            <!-- ... -->
            <div class="button-container">
                <button type="submit" class="btn btn-success">Submit Order</button>
            </div>
        </form> --}}
<script>

    function showConfirmation() {
        var isConfirmed = confirm('Are you sure you want to continue to ship the scarve');
        if (isConfirmed) {
            // alert('Your order has been submitted successfully!');
             // Redirect to thankyou.blade.php
             window.location.href = "{{ route('index-shipping') }}";
            return true; // Proceed with form submission
        } else {
            return false; // Cancel form submission
        }
    }
   

    function addToCarts() {
        // Get the current quantity input value
        var quantityInput = document.querySelector('input[name="cart_quantity"]');
        
        // Update the quantity value (you can customize this logic)
        quantityInput.value = parseInt(quantityInput.value) + 1;
    }

</script>
</body>
</html>
