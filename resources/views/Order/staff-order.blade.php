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

.container {
    width: 98%;
    margin: 30px auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
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
    border: none;
    border-radius: 5px;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
}

.btn-primary {
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

.shipping-details {
    text-align: left;
    margin-bottom: 30px;
    padding: 10px;
    background-color: #f2f2f2;
    border: 2px solid #ddd;
}

.form-control {
    appearance: none;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #fff;
    width: 200px;
    font-size: 16px;
}

option:checked {
    background-color: #f0f0f0;
    color: #333;
}

        /* body {
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
        /* .shipping-details {
            text-align: left;
            margin-bottom: 30px;
            padding: 10px;
            background-color: #f2f2f2;
            border: 2px solid #ddd;
        }

        .shipping-details p {
            margin: 1;
        }

        /* Style the select container */
        .form-control {
        appearance: none; /* Remove default appearance */
        padding: 10px; /* Add padding */
        border: 1px solid #ccc; /* Add border */
        border-radius: 5px; /* Add border radius */
        background-color: #fff; /* Add background color */
        width: 200px; /* Set width */
        font-size: 16px; /* Set font size */
        }

        /* Style the selected option */
        option:checked {
        background-color: #f0f0f0; /* Add background color */
        color: #333; /* Change text color */
        } */ */

        .order-status.cancelled {
    color: red;
}

    </style>
</head> 
<body> 
<h1>Customer's Order</h1>
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
                {{-- <th>Staff Assign</th>
                <th>Order delivered</th> --}}
                {{-- <th>Image</th> --}}
                <th>Action</th> 
            </tr> 
        </thead> 
        <tbody> 
            
            @foreach ($model as $value) 
                <tr> 
                    <td>#{{ $value->order_id}}</td>
                    <td>{{ $value->user->name}}</td>
                    <td>{{optional($value->cart)->prod_name }}</td>
                    <td>{{optional($value->cart)->prod_price }}</td>
                    <td>{{optional($value->cart)->cart_quantity }}</td>
                    <td>{{optional($value->shipping)->ship_name }}
                    <p>{{ optional($value->shipping)->ship_phoneNo }}</p>
                    <p>{{ optional($value->shipping)->ship_address }}</p>
                    <p>{{ optional($value->shipping)->ship_code }}</p>
                    <p>{{ optional($value->shipping)->ship_city }}</p>
                    <p>{{ optional($value->shipping)->ship_state }}</p>
                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('j F Y h.i A') }}</td>
                    <td id="orderStatus">{{ $value->order_status ?: 'In progress' }}</td>
                    {{-- <td id="orderStatus">{{ optional($value->staff)->staff_name?: ' ' }}</td>
                    <td id="orderStatus">{{ optional($value->staff)->staff_name?: ' ' }}</td> --}}
                    {{-- <td style="text-align: center;"><img src="{{ asset('images/'.$value->order_payment) }}" width="120" alt="Product Image"></td> --}}

                    <td >
                        <!-- Form for Update Status -->
                        <form action="{{ route('update-status', ['id' => $value->order_id]) }}" method="post" style="display: inline-block;">
                            @csrf
                            <!-- Dropdown for selecting status -->
                            <h4>Update Status</h4>
                            <select name="order_status" id="order_status" class="form-control" required>
                                <option value="" disabled selected>Choose Status</option>
                                <option value="pending">Pending</option>
                                <option value="processing">Processing</option>
                                <option value="completed">Completed</option>
                                <option value="cancelled">Cancel</option> <!-- Added Cancel option -->
                            </select>
                            
                            <br><br>
                            <!-- Button for Update Status -->
                            <button class="btn btn-primary" type="submit" style="background-color: blue;">Update</button>
                        </form>
                        <br><br>

                                                
                        <!-- Form for Remove -->
                        <form action="{{ route('delete-order', ['id' => $value->order_id]) }}" method="post" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <!-- Button for Remove with the same style as Edit -->
                            <button class="btn btn-primary" type="submit" style="background-color: rgb(226, 0, 0);" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button>
                        </form>

                    </td>
                
                </tr> 
            @endforeach 
        </tbody>

        {{-- <script>
            function cancelOrder() {
                // Send an AJAX request to the server to update the order status
                // You can use any JavaScript AJAX library like Axios or jQuery.ajax
                // Example using Axios:
                axios.post('/cancel-order', { order_id: '{{ $value->id }}' })
                    .then(response => {
                        // Update the order status display
                        document.getElementById('orderStatus').innerText = 'Cancelled';
                    })
                    .catch(error => {
                        console.error('Error cancelling order:', error);
                    });
            }
        </script> --}}
            
    </body>
</html>

