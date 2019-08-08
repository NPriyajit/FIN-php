<?php

$servername="localhost";
$un="root";
$pass="";
$database="chatroom";

//connecting database

$conn=mysqli_connect($servername,$un,$pass,$database);

if(!$conn)
{
    die("Failed to connect". mysqli_connect_error());
}

?>