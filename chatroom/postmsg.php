<?php

$msg=$_GET['text'];
$name=$_GET['uname'];
$room=$_GET['room'];
$ip=$_GET['ip'];


include 'db_connect.php';
$sql="INSERT INTO `msgs` (`msg`,`uname`, `room`, `ip`, `stime`) VALUES ('$msg','$name', '$room', '$ip', current_timestamp());";
mysqli_query($conn,$sql);
mysqli_close($conn);



?>