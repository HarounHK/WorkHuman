<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "data"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) 
{
    die("Connection failed");
}

$conn->close();
?>
