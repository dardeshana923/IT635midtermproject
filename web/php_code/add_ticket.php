<?php

 include('connection.php');
 $t=time();


 $CompanyName=$_POST['CompanyName'];
 $ContactName=$_POST['ContactName'];
 $AssignedTech=$_POST['AssignedTech'];
 $CustomerEmail=$_POST['CustomerEmail'];
 $CustomerPhone	=$_POST['CustomerPhone'];
 $Issue=$_POST['Issue'];
 $Notes=$_POST['Notes'];
 $Status=$_POST['Status'];
 $Time=date("Y-m-d",$t);

$query = "INSERT INTO `ticketsystem`(`ID`, `CompanyName`, `ContactName`, `AssignedTech`, `CustomerPhone`, `CustomerEmail`, `Issue`, `Notes`, `Status`, `Time`) 
VALUES (default,'$CompanyName','$ContactName','$AssignedTech','$CustomerPhone','$CustomerEmail','$Issue','$Notes','$Status','$Time')";


if(mysqli_query($conn,$query))
			{
			//find last service details id
			
					echo '<div class="alert alert-primary">Ticket Created </div>';
				
			}
else{
	  
	  echo '<div class="alert alert-warning">Ticket not Created</div>';
	
  }
?>
