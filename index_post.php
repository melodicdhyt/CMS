
<!DOCTYPE html>
<html>
	<head>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- tiny MCE -->
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
		<title>Crud App</title>
	</head>
	<body>
		
		<div class="container">
			
			<div class="row" style="margin-top: 70px;"">
				<center><h1>POSTS</h1></center>
				<div class="col-md-10 col-md-offset-1">
					<table class="table">
						<button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Posts</button>
						<button type="button" class="btn btn-default pull-right">Print</button>
						<hr><br>
						<!-- Modal -->
						<div id="myModal" class="modal fade" role="dialog">
							<div class="modal-dialog">
								<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">Add Posts</h4>
									</div>
									<div class="modal-body">
										<form  method="POST" action="add.php">
											<div class="form-group">
												<label>Title</label>
												<input type="text" required name="post_title" class="form-control">
												<label>Content</label>
												<textarea required name="" ></textarea>
												
												
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
								<th>Title</th>
								<th>date</th>
								<th>Author</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								
								<th scope="row"></th>
								<td></td>
								<td></td>
								<td></td>
								<td><a href="" class="btn btn-success">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
							</tr>
							
						</tbody>
					</table>
				</div>
			</div>
		</body>
	</html>
