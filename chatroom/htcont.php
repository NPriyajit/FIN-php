<?php
$room=$_POST['room'];
$uname=$_POST['uname'];
$res="";
include 'db_connect.php';
$sqli="SELECT msg, uname, ip, stime FROM `msgs` WHERE room='$room'";
$result=mysqli_query($conn, $sqli);

if(mysqli_num_rows($result) != 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        if ($uname== $row['uname'])
        {
            $res= $res . '<li class="replies"><div style="display:inline-flex; float:right" >';
            $res= $res . '<p style="float:right;"><span style="font-size:8px; margin-left:40px;float:right;">~Me</span>' . $row['msg'] .'<br><span style="font-size:5px; margin-left:40px;float:right; top:10px;">'. $row['stime']. '</span>';
            $res= $res . '</p><div style="background-color:slategray; float:right; border-radius:50%; width:25px; height:25px; margin-top:8px; margin-left:8px; margin-right:8px;"><i class="fa fa-user" style="width:20px;height:20px; color:aliceblue;"></i></div></div> </li>';
       
        }
        else{
            $res= $res . '	<li class="sent"><div style="display:inline-flex; float:left;" > <div style="background-color:#243140; display:inline-block; border-radius:50%; width:25px; height:25px; margin-top:8px; margin-left:8px; margin-right:8px;"><i class="fa fa-user" style="width:20px;height:20px; color:rgba(255, 255, 255, 0.796); position:relative;"></i></div>';
            $res= $res . '<p><span style="font-size:8px; margin-left:40px;float:right;">~'.  $row['uname'] . '</span>' . $row['msg']  ;
            $res = $res . '<br><span style="font-size:5px; margin-left:40px;float:right; top:10px;">'. $row['stime']. '</span></p></div></li>';
        }
    }
}

echo "$res";

?>