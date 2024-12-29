@extends ("customer.navbar")
<!DOCTYPE html> 
<html> 
<head> 
    <title>View Customer</title> 
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        table, th, td {
            border: 1px solid #000000;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: white;
            color: #000;
        }

        .btn {
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            align-items: center;
        }

        .btn-common {
        font-size: 16px; /* Adjust the font size as needed */
        width: 80px; /* Adjust the width as needed */
        margin-right: 10px; /* Add space between buttons */
         }

        .create-button-container {
            display: flex;
            align-items: center;
            justify-content: flex-end;
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
    </br>
<h1 style="text-align: center;">NEEDEANE CUSTOMER</h1>

    </br>
    <table class="table" id="dataTable"> 
        <thead> 
            <tr> 
                <th>No</th> 
                <th>Username</th> 
                <th>Full Name</th> 
                <th>Email</th> 
                <th>Phone Number</th>
                <th>Password</th> 
            </tr> 
        </thead> 
        <tbody> 
             @php $counter = 1 @endphp <!-- Initialize the counter -->
             @foreach ($model as $value) 
             <tr> 
                <td>{{ $counter++ }}</td>
                <td>{{  $value->username }}</td> 
                <td>{{  $value->cust_Fname }}</td>
                <td>{{  $value->cust_email }}</td>  
                <td>{{  $value->cust_phoneNo}}</td> 
                <td>{{  $value->cust_password }}</td> 
                
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
</div>
</section>
</body> 
</html>