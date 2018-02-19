#!/usr/bin/php
<?php
$AssignedTech = $argv[1];

echo "Connecting to mysql...";
$mysql = new mysqli("localhost","admin","12345","midtermproject");

if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}
else
{
        echo "Connection successful!\n";
}

	echo "Run the file with one arguments: 3 letter initials for tech.\n";

	echo "Following tickets as been assigned to this tech:$AssignedTech \n";

$sql = "SELECT * FROM ticketsystem WHERE AssignedTech='$AssignedTech';";
$response = $mysql->query($sql);

if($mysql->errno != 0)
{
	echo "Error executing sql: ".$mysql->error.PHP_EOL;
	echo $sql.PHP_EOL;
	exit(0);
}

while($result = $response->fetch_assoc())
{
	var_dump($result);
}

?>


