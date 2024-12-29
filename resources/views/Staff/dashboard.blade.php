@extends ("staff.stanav")
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Welcome Staff</title>
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



		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Homepage</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="#">Homepage</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
					
					</ul>
				</div>
			</div>

			<ul class="box-info">
			
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<h3>{{ $productCount }}</h3>
						<p>Order</p>
					</span>
				</li>
				
			</ul>
				
		</main>
		<!-- MAIN -->
		
	</section>
	<!-- CONTENT -->
	

</body>
</html>