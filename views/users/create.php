

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Users List</title>
</head>
<body>
	<div class="container">
		<h2 class="mt-5">Create User</h2>
		<div class="card mt-5 col-md-6">
			
			<div class="card-body">
				<form action="crud.php" method="post">
				  	<div class="form-group">
				    	<label for="name">Name</label>
				    	<input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Enter Name">
				    	<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
				  	</div>
				  	<div class="form-group">
					    <label for="email">Email</label>
					    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
				  	</div>
				  	<div class="form-group">
					    <label for="age">Age</label>
					    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age">
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>

	</div>
</body>
</html>