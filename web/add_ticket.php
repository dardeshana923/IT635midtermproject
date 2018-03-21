<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
  </div>
</nav>
  
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
	
      <h4>Dashboard </h4>
	   <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
	  <br>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Ticket Page</a></li>
        
        <li class=""><a href="#section1">Add Ticket</a></li>
        
      </ul><br>
     
    </div>

    <div class="col-sm-10">
	
      
<div class="row">
<form action="php_code/add_ticket.php" method="POST">
<h2>Add Ticket</h2>
	<div class="col-sm-4">
	
	
		
		
		<div class="form-group">
			<label for="username"> Company Name:</label>
			<input type="text" class="form-control" id="CompanyName" placeholder="" name="CompanyName">
		</div>
		
		<div class="form-group">
			<label for="text">Contact Name:</label>
			<input type="text" class="form-control" id="ContactName" placeholder="" name="ContactName">
		</div>
		
		
		
		<div class="form-group">
			<label for="text">Assigned Tech</label>
			<input type="text" class="form-control" id="AssignedTech" placeholder="" name="AssignedTech">
		</div>
		
		
		
		<div class="form-group">
			<label for="text">Customer Phone</label>
			<input type="text" class="form-control" id="CustomerPhone" placeholder="" name="CustomerPhone">
		</div>
		
	</div>
	<div class="col-sm-4">	
		<div class="form-group">
			<label for="text">Customer Emai</label>
			<input type="text" class="form-control" id="CustomerEmail" placeholder="" name="CustomerEmail">
		</div>
		
		
		
		<div class="form-group">
			<label for="text">Issue:</label>
			<input type="text" class="form-control" id="Issue" placeholder="" name="Issue">
		</div>
		
		
		
		<div class="form-group">
			<label for="text">Notes</label>
			<input type="text" class="form-control" id="Notes" placeholder="" name="Notes">
		</div>
		
		
		<div class="form-group">
			<label for="text">Status</label>
			<input type="text" class="form-control" id="Status" placeholder="" name="Status">
		</div>
		
		<button type="submit" class="btn btn-default">Submit</button>
		<button type="submit" class="btn btn-danger">Cancel</button>
		
		</div>
    
		
		
  </div>
  </form>
</div>
    </div>
	
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
