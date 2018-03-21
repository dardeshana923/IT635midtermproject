<?php 

include ('connection.php');

$Username = $_POST['username'];
$Password = $_POST['password'];

//$query = "select * from userinfo where username == $Email AND password = $Password" ;
$query = "SELECT `username`, `password` FROM `user_login` WHERE `username` = '$Username' and `password` = '$Password'";
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_array($result)){

	}
        
	header('Location:../add_ticket.php'); 
}

else 
{
	echo 'Wrong Username or password';
}


?>
