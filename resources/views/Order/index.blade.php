index order 9/1/2024

<!DOCTYPE html> 
<html> 
<head> 
    <title>View Order</title> 

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
            margin: 30px auto;
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
            width: 30px;
            text-align: center;
        }

        .btn-common {
            background-color: #000000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            position: fixed;
            bottom: 10px;
            right: 10px;
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
            background-color: #000000;
            color: #fff;
            border: 1px solid #000000;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Additional Styles for Shipping Details */
        .shipping-details {
            text-align: left;
            margin-bottom: 30px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 2px solid #ddd;
        }

        .shipping-details p {
            margin: 1;
        }
    </style>
</head> 
<body> 
 
<div class="container"> 
    <br> 
    <table class="table table-bordered" id="dataTable" width="" cellspacing="0"> 
        <thead> 
            <tr> 
                <th>No</th>
                <th>User Name</th>
                <th>Scarve name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Order Address</th> 
                <th>Order Created</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Action</th> 
            </tr> 
        </thead> 
        <tbody> 
            
            @foreach ($model as $value) 
                <tr> 
                    <td>#{{ $value->order_id}}</td>
                    <td>{{ $value->user->name}}</td>
                    <td>{{ optional($value->cart)->prod_name }}</td>
                    <td>{{ optional($value->cart)->prod_price }}</td>
                    <td>{{ optional($value->cart)->cart_quantity }}</td>
                    <td>{{ $value->shipping->ship_name }}
                    <p>{{ $value->shipping->ship_phoneNo }}</p>
                    <p>{{ $value->shipping->ship_address }}</p>
                    <p>{{ $value->shipping->ship_code }}</p>
                    <p>{{ $value->shipping->ship_city }}</p>
                    <p>{{ $value->shipping->ship_state }}</p>
                    <td>{{ $value->created_at }}</td>
                    <td id="orderStatus">{{ $value->order_status ?: 'In progress' }}</td>
                    <td><button onclick="updateOrderStatus()">Delivered</button></td>
                        {{-- <a href="{{ route('view-order') }}" style="background-color: #00c717; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Details</a> --}}
                    <td class="button-container">
                        
                        <form action="{{ route('delete-order', ['id' => $value->order_id]) }}" method="get">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger " type="submit"
                                    onclick="return confirm('Are you sure you want to delete this item?')">Remove
                            </button>
                        </form>
                    </td>
                
           
                </tr> 
            @endforeach 
        </tbody>
        <script>
             function updateOrderStatus() {
        // Get the order status element
        var orderStatusElement = document.getElementById('orderStatus');

        // Check if the current order status is 'In progress'
        if (orderStatusElement.innerText.trim() === 'In progress') {
            // Update the order status to 'Delivered'
            orderStatusElement.innerText = 'Delivered';
        }
    }
            </script>
            
    </body>
</html>

