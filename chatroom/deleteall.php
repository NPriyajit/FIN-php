<?php

include 'db_connect.php';
$room=$_POST['room'];
$sql ="SELECT * FROM `users` WHERE  room= '$room'; ";
$result=mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result) >1)
    {
      echo "sorry";
    }
    else
    {
        mysqli_close($conn);
        
        include 'db_connect.php';
        $msg="DELETE FROM `msgs` WHERE  room='$room'";
        mysqli_query($conn,$msg);
        mysqli_close($conn);

        include 'db_connect.php';
        $romm="DELETE FROM `room` WHERE  name='$room'";
        mysqli_query($conn,$romm);
        mysqli_close($conn);


        include 'db_connect.php';

        $user="DELETE FROM `users` WHERE  room='$room'";
        mysqli_query($conn,$user);
        mysqli_close($conn);
        echo "success";
    }
}

?>