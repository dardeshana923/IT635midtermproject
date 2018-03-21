<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container jumbotron">
  
<div class="row">
	<div class="col-sm-3">
	</div>
	<div class="col-sm-6">
	<h2>Login Infromation</h2>
		<form action="php_code/login.php" method="POST">
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" class="form-control" id="username" placeholder="" name="username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
		</div>
    
		<button type="submit" class="btn btn-default">Submit</button>
		</form>
  </div>
	<div class="col-sm-3">
	</div>
</div>
</div>

</body>
</html>
