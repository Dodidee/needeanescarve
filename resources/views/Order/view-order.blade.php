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

        .order-container {
            width: 80%;
            margin: 30px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            overflow-x: auto; /* Add horizontal scroll if needed */
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .order-table th,
        .order-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .order-table th {
            background-color: #f2f2f2;
        }

        .order-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .order-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .order-details p {
            margin: 5px 0;
        }

        .product-image {
            text-align: center;
        }

        .product-image img {
            max-width: 100px;
            max-height: 100px;
        }

        .action-btn {
            text-align: center;
            margin-top: 10px;
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
            background-color: #da0000;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #da0000;
        }

        .order-status.cancelled {
    color: red;
}
    </style>
</head>
<body>
<h1>Your Orders in NeedeaneScarve</h1>

@foreach ($model as $value)
    <div class="order-container">
        <div class="order-details">
            <h2>Order ID: {{ $value->order_id }}</h2>
            <p>User Name: {{ $value->user->name }}</p>
            <!-- Add more order details as needed -->
        </div>

        <table class="order-table">
            <thead>
            <tr>
                <th>Scarve Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Order Address</th>
                <th>Order Created</th>
                <th>Status</th>
                {{-- <th>Image</th> --}}
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{ optional($value->cart)->prod_name }}</td>
                <td>{{ optional($value->cart)->prod_price }}</td>
                <td>{{ optional($value->cart)->cart_quantity }}</td>
                <td>{{optional($value->shipping)->ship_name }}
                    <p>{{ optional($value->shipping)->ship_phoneNo }}</p>
                    <p>{{ optional($value->shipping)->ship_address }}</p>
                    <p>{{ optional($value->shipping)->ship_code }}</p>
                    <p>{{ optional($value->shipping)->ship_city }}</p>
                    <p>{{ optional($value->shipping)->ship_state }}</p>
                <td>{{ \Carbon\Carbon::parse($value->created_at)->format('j F Y h.i A') }}</td>
                <td id="orderStatus">{{ $value->order_status ?: 'In progress' }}</td>
                {{-- <td class="product-image"><img src="{{ asset('images/'.$value->order_payment) }}" alt="Product Image"></td> --}}
                <td class="action-btn">
                    <form action="{{ route('update-status', ['id' => $value->order_id]) }}" method="post">
                        @csrf
                        <h4>Cancel Order</h4>
                        <select name="order_status" class="form-control" required onchange="changeStatus()">
                            <option value="" disabled selected>Choose Status</option>
                            <option value="cancelled">Cancel Order</option>
                        </select>
                        <br><br>
                        <button class="btn btn-primary" type="submit">Cancel</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endforeach

</body>
</html>
