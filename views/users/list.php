<?php

require dirname(__FILE__).'/../../controller/UsersController.php';
$user_class = new UsersController();
$users = json_decode($user_class->users_list());
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Users List</title>
</head>
<body>
	<div class="container">
		<h5 class="mt-5">User Lists</h5>
		<div class="card mt-5">
			<div class="card-header">
				<a href="create.php" class="btn btn-success btn-sm float-right">Add User</a>	
			</div>
			
			<div class="card-body">
				<table class="table table-striped">
				  	<thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Age</th>
					    </tr>
				  	</thead>
				  <tbody>
				  	<?php
				  		foreach($users as $user){
				  			echo '<tr>';
					  			echo '<td>'.$user->id.'</td>';
					  			echo '<td>'.$user->name.'</td>';
					  			echo '<td>'.$user->email.'</td>';
					  			echo '<td>'.$user->age.'</td>';
				  			echo '</tr>';
				  		}	
				   	?>
				  </tbody>
				</table>
			</div>
		</div>

	</div>
</body>
</html>