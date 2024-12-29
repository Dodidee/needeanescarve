@extends ("product.navbar")
<!DOCTYPE html>
<html>
<head>
    <title>View product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            

        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: white;
            color: #000;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 90px;
            height: auto;
        }

        .btn {
            display: inline-block;
            padding: 10px 10px;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .btn-common {
        font-size: 16px; /* Adjust the font size as needed */
        width: 80px; /* Adjust the width as needed */
        margin-right: 10px; /* Add space between buttons */
         }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-success {
            background-color: #28a745;
        }

        .table-buttons {
            text-align: right;
        }

        .button-container {
            display: flex;
            align-items: center;
        }

    </style>
</head>
<body>
    <!-- CONTENT -->
		<section id="content">
    <!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<!-- NAVBAR -->
<div class="container">
<h1 style="text-align: center;">NEEDEANE PRODUCT</h1>
    <div class="table-buttons">
        <a class="btn btn-success" href="{{route('createform-product') }}">Create</a>
    </div>
    <table class="table table-bordered" id="dataTable" width="" cellspacing="0">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
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
               <td>{{ $value->prod_quantity }}</td>
               <td><img src="{{asset('images/'.$value->prod_image)}}" width="90"></td>
                <td class="button-container">
                    <a class="btn btn-primary btn-common" href="{{ route('moreinfo', ['id' => $value->prod_id]) }}" style="background-color: orange;">Details</a>
                <a class="btn btn-primary btn-common" href="{{ route('updateform-product', ['id' => $value->prod_id]) }}">Update</a>

                    <form action="{{ route('delete-product', ['id' => $value->prod_id]) }}" method="get"> 
                        @csrf 
                       @method('delete')  
                        <button class="btn btn-danger btn-common" type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button> 
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    </section>
</body>
</html>
