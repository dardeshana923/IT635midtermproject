#!/usr/bin/php
<?php
$Status = $argv[1];

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

	echo "Run the file with one argument: Status(Open, Working, Resolved, or Closed)\n";

	echo "Following tickets are:$Status \n";

$sql = "SELECT * FROM ticketsystem WHERE Status='$Status';";
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


