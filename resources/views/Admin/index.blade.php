@extends ("admin.navbar")
<!DOCTYPE html> 
<html> 
<head> 
    <title>View Staff</title> 
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
<h1 style="text-align: center;">ADMIN</h1>
    </br>
    <table class="table" id="dataTable"> 
        <thead> 
            <tr> 
                <th>No</th> 
                <th>Username</th> 
                <th>Full Name</th> 
                <th>Email</th> 
            </tr> 
        </thead> 
        <tbody> 
             @php $counter = 1 @endphp <!-- Initialize the counter -->
             @foreach ($model as $value) 
             <tr> 
                <td>{{ $counter++ }}</td>
                <td>{{ $value->username }}</td> 
                <td>{{ $value->admin_email }}</td>
                <td>{{ $value->admin_password }}</td>  
                
            </tr> 
            @endforeach 
        </tbody> 
    </table> 
    
</div>
    </section>
</body> 
</html>
