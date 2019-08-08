<?php
include 'db_connect.php';
$room=$_GET['room'];
$name=$_GET['uname'];
$user="INSERT INTO `users` (`uname`, `room`) VALUES ( '$name', '$room');";
mysqli_query($conn,$user);
mysqli_close($conn);


?>