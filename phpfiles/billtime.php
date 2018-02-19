#!/usr/bin/php
<?php

$ID = $argv[1];

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


$sql ="SELECT Time FROM ticketsystem WHERE ID=$ID;";
$result = $mysql->query($sql);

if($mysql->errno != 0)
{
        echo "Error executing sql: ".$mysql->error.PHP_EOL;
        echo $sql.PHP_EOL;
        exit(0);
}

while ($row = $result->fetch_assoc()) {
    echo $row['Time'];
}
?>


