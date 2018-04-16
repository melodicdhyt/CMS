<?php 
include 'db.php'; 
$sql = ('select * from user');
$rows = $db -> query($sql);
?>


<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Crud App</title>
	</head>
	<body>
		<?

$today = date("Y-m-d h:i:sa");
printr ($today);
?>
		<div class="container">
			
			<div class="row" style="margin-top: 70px;"">
				<center><h1>Todo List</h1></center>
				<div class="col-md-10 col-md-offset-1">
					<table class="table">
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
						<button type="button" class="btn btn-default pull-right">Print</button>
						<hr><br>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Task</h4>
									</div>
									<div class="modal-body">
										<form  method="POST" action="add.php">
											<div class="form-group">
												<label>User Login</label>
												<input type="text" required name="user_login" class="form-control">
												<label>Password</label>
												<input type="password" required name="user_pass" class="form-control">
												<label>User Name</label>
												<input type="text" required name="user_name" class="form-control">
												

											</div>
											<input type="submit" name="send" value="send" class="btn btn-success">
										</form>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
						
						<thead>
							<tr>
								<th>No.</th>
								<th>user login</th>
								<th>Name</th>
								<th>User Registered</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php while ($row = $rows ->fetch_assoc()): ?>

								<th scope="row"><?php echo $row['id']?></th>
								<td><?php echo $row['user_login']?></td>
								<td><?php echo$row['user_name']?></td>
								<td><?php echo$row['date']?></td>
								
								<td><a href="" class="btn btn-success">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</body>
	</html>
