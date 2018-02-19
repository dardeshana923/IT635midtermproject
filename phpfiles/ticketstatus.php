#!/usr/bin/php
<?php
$ID = $argv[1];
$Status = $argv[2];

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

	echo "Run the file with two arguments: Ticket ID and Status\n";
	echo "Status has been changed for ticket: $ID \n"; 

$sql ="UPDATE ticketsystem SET Status='$Status' WHERE ID=$ID;";
$result = $mysql->query($sql);

if($mysql->errno != 0)
{
        echo "Error executing sql: ".$mysql->error.PHP_EOL;
        echo $sql.PHP_EOL;
        exit(0);
}

$sql2 = "SELECT * FROM ticketsystem WHERE ID=$ID;";
$response = $mysql->query($sql2);

if($mysql->errno != 0)
{
        echo "Error executing sql: ".$mysql->error.PHP_EOL;
        echo $sql2.PHP_EOL;
        exit(0);
}

while($result2 = $response->fetch_assoc())
{
	var_dump($result2);
}
?>


