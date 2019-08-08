<?php
include 'db_connect.php';
$room= $_POST['room'];
$uname= $_POST['uname'];
$sqli="SELECT uname FROM `users` WHERE room='$room'";
$result=mysqli_query($conn, $sqli);
$res="";
if(mysqli_num_rows($result) != 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
      $res=$res . '	<div class="'. $row['uname'] . '" id="udata" style="border:1px solid white; height:50px;"><p class="newuname" style="display:inline-flex; margin-top:15px; margin-left:10px;"><span class="online" style="margin-left:8px;"></span><i class="fa fa-user" ></i><div style="margin-right:10px; display:inline; margin-top"10px;></div>';
      $res = $res . $row['uname'] . '</p>';
      if($uname==$row['uname'])
      {
      $res= $res . '<i style="float:right; margin-top:-12px; margin-right:10px; cursor:pointer;" title="exit" class="fa fa-sign-out" onclick="del()"></i></div><br>';
      }
      else
      {
        $res= $res . '</div><br>';
      }
    }
}
echo $res;
?>