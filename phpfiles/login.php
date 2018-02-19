#!/usr/bin/php
<?php

echo "Connecting to mysql...";
$mysql = new mysqli("localhost","admin","12345","midtermproject");

if ($mysql->errno != 0)
{
	echo "error connecting to database: ".$mysql->error.PHP_EOL;
	exit(0);
}
else
{
	echo "Connection successful!";
}

return true;
?>

