<!DOCTYPE html>
<html>
<head>
    <title>Order product</title>
    <style>
    </style>
</head>
<body>
<h1 style="text-align: center;">YOUR CART</h1>
<table class="table table-bordered" id="dataTable" width="" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @php $counter = 1 @endphp <!-- Initialize the counter -->
             @foreach ($model as $value) 
             <tr> 
                <td>{{ $counter++ }}</td>
                <td>{{ $value->prod_name }}</td>
                <td>RM{{ $value->prod_price }}</td>
                <td>{{ $value->prod_desc }}</td>
                <td>{{ $value->prod_quantity }}</td>
                <td><img src="{{asset('images/'.$value->prod_image)}}" width="90"></td>
                <td class="button-container"> 
                    <a class="btn btn-primary btn-common" href="{{ route('updateform-product', ['id' => $value->prod_id]) }}">Update</a>
                    <form action="{{ route('delete-product', ['id' => $value->prod_id]) }}" method="get"> 
                        @csrf 
                        @method('delete')  
                        <button class="btn btn-danger btn-common" type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button> 
                    </form>
                </td> 
                </td>
            </tr>
            @endforeach
        </tbody>
</table>
</body>
</html>
