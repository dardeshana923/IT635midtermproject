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
	
      <h4>Ticket Page</h4>
      <table class="table table-striped">
    <thead>
      <tr>
	  <th>ID</th>
	  <th>Company Name</th>
	  <th>Contact Name</th>
	  <th>Assigned Tech</th>
	  <th>Customer Phone</th>
	  <th>Customer Email</th>
	  <th>Issue</th>
	  <th>Notes</th>
	  <th>Status</th>
	  <th>Time</th>
	  <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>
	<?php include('php_code/connection.php');
	  $query = "SELECT * FROM `ticketsystem`";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){

	?>

      <tr>
	  

      <td><input type="text" class="form-control"  value="<?php echo $row['ID'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo  $row['CompanyName'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo  $row['ContactName'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo $row['AssignedTech'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo $row['CustomerPhone'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo $row['CustomerEmail'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo  $row['Issue'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo $row['Notes'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo  $row['Status'];?>" id="text"></td>
      <td><input type="text" class="form-control" value="<?php echo  $row['Time'];?>" id="text"></td>
	  
  	<!--<td><button type="button" class="btn btn-primary">Update</button></td>-->
  	<!--<td><button type="button" class="btn btn-danger">Danger</button></td>-->
      </tr>
     <?php 
	 }
	 }
else 
{
	echo "no data found";
}	
	?>
	
    </tbody>
  </table>
    </div>
	
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
