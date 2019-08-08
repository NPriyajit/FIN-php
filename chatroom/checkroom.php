<?php

$room=$_POST['urlpath'];

if (strlen($room)>20 or strlen($room)<2)
{
    echo 'Please provide name between 2 to 20 character';
}

else if (! ctype_alnum($room)){

    echo 'Please provide alphanumeric room name';
}

else{
    include 'db_connect.php';

$sql ="SELECT * FROM `room` WHERE  NAME= '$room'; ";
$result=mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)>0)
    {
        echo 'Please choose different room name, this room name is already exitst.';
    }
    else
    {
       $ins= "INSERT INTO `room` (`name`, `date`) VALUES ('$room', CURRENT_TIMESTAMP);";
       if(mysqli_query($conn,$ins))
       {
        echo '/chatroom/rooms.php?urlpath='. $room .'';
       }
       else
       {
           echo "Sorry some error";
       }
    }
}
}
?>