<?php

$roomname=$_GET['urlpath'];

include 'db_connect.php';
$sqli ="SELECT * FROM `room` WHERE  NAME= '$roomname'";
$res=mysqli_query($conn, $sqli);
if($res)
{
    if(mysqli_num_rows($res)==0)
    {
        echo "<script>alert('this room doesnot exit, please create a new one'); window.location='/chatroom'; </script>";
    }
}
else{
    echo "Error";
}

?>

<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 30px auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0 ;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}



.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.allcontent{
  overflow-y:scroll;
  max-height:400px;
  min-height:200px;
}
</style>
</head>
<body>

<h2 class="display-3">Chat Messages</h2>

<div class="container">
<div class="allcontent">

</div>
</div>
<div  style="display:inline; " >
<input type="text" class="form-control col-sm-11" id="msgtext" placeholder="Write your message..." />
<button type="button" id="submitmsg" class="btn col-sm-1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
  </div>

  <script type="text/javascript">
var message;
setInterval(somefun, 1000);

function somefun() {
  $.post("htcont.php", { room: '<?php echo $roomname ?>'},
  function(data, status){
    document.getElementsByClassName('allcontent')[0].innerHTML = data; });
}
  
$('document').ready(function(){
$('#submitmsg').click(function() {
  message = $("#msgtext").val();
  $.post("postmsg.php", {text: message, room: '<?php echo $roomname ?>', ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'}, 
  function(data, status){  document.getElementsByClassName('allcontent')[0].innerHTML = data; return false; });
  $("#msgtext").val(null);
});
});
</script>
</body>
</html>


$res= $res . '<div class="container darker">';
        $res= $res . '<p>'. $row['msg'];
        $res = $res . '</p> <span class="time-left">' . $row['stime'] . '</span> </div>';