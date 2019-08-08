<?php

$roomname=$_GET['urlpath'];

include 'db_connect.php';
$sqli ="SELECT * FROM `room` WHERE  NAME= '$roomname'";
$res=mysqli_query($conn, $sqli);
if($res)
{
    if(mysqli_num_rows($res)==0)
    {
        echo "<script>alert('this room doesnot exist, please create a new one'); window.location='/chatroom'; </script>";
    }
}
else{
    echo "Error";
}
?>
<!DOCTYPE html><html class=''>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/emilcarlsson/pen/ZOQZaV?limit=all&page=74&q=contact+" />
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet' type='text/css'>

<script src="https://use.typekit.net/hoy3lrg.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

<style  class="cp-pen-styles">
    

body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: #27ae60;
    font-family: "proxima-nova", "Source Sans Pro", sans-serif;
    font-size: 1em;
    letter-spacing: 0.1px;
    color: #32465a;
    text-rendering: optimizeLegibility;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
    -webkit-font-smoothing: antialiased;
  }
  
  #frame {
    
    width: 95%;
    min-width: 360px;
    max-width: 1000px;
    height: 92vh;
    min-height: 300px;
    max-height: 720px;
    background: #E6EAEA;
      /* Add the blur effect */
      filter: blur(8px);
    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
  }
  @media screen and (max-width: 360px) {
    #frame {
      width: 100%;
      height: 100vh;
    }
  }
  #frame #sidepanel {
    float: left;
    min-width: 280px;
    max-width: 340px;
    width: 40%;
    height: 100%;
    background: #2c3e50;
    color: #f5f5f5;
    overflow: hidden;
    position: relative;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel {
      width: 58px;
      min-width: 58px;
    }
  }
  #frame #sidepanel #profile {
    width: 80%;
    margin: 25px auto;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #profile {
      width: 100%;
      margin: 0 auto;
      padding: 5px 0 0 0;
      background: #32465a;
    }
  }
  #frame #sidepanel #profile.expanded .wrap {
    height: 210px;
    line-height: initial;
  }
  #frame #sidepanel #profile.expanded .wrap p {
    margin-top: 20px;
  }
  #frame #sidepanel #profile.expanded .wrap i.expand-button {
    -moz-transform: scaleY(-1);
    -o-transform: scaleY(-1);
    -webkit-transform: scaleY(-1);
    transform: scaleY(-1);
    filter: FlipH;
    -ms-filter: "FlipH";
  }
  #frame #sidepanel #profile {
    height: 60px;
    line-height: 60px;
    overflow: hidden;
    -moz-transition: 0.3s height ease;
    -o-transition: 0.3s height ease;
    -webkit-transition: 0.3s height ease;
    transition: 0.3s height ease;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #profile {
      height: 55px;
    }
  }
  
  @media screen and (max-width: 735px) {
    #frame #sidepanel #profile i {
      width: 40px;
      margin-left: 4px;
    }
  }
  #frame #sidepanel #profile i.online {
    border: 2px solid #2ecc71;
  }
  
  #frame #sidepanel #contacts {
    height: calc(100% - 177px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #contacts {
      height: calc(100% - 149px);
      overflow-y: scroll;
      overflow-x: hidden;
    }
    #frame #sidepanel #contacts::-webkit-scrollbar {
      display: none;
    }
  }
  #frame #sidepanel #contacts.expanded {
    height: calc(100% - 334px);
  }
  #frame #sidepanel #contacts::-webkit-scrollbar {
    width: 8px;
    background: #2c3e50;
  }
  #frame #sidepanel #contacts::-webkit-scrollbar-thumb {
    background-color: #243140;
  }
  #frame #sidepanel #contacts ul li.contact {
    position: relative;
    padding: 10px 0 15px 0;
    font-size: 0.9em;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #contacts ul li.contact {
      padding: 6px 0 46px 8px;
    }
  }
  #frame #sidepanel #contacts ul li.contact:hover {
    background: #32465a;
  }
  #frame #sidepanel #contacts ul li.contact.active {
    background: #32465a;
    border-right: 5px solid #435f7a;
  }
  #frame #sidepanel #contacts ul li.contact.active span.contact-status {
    border: 2px solid #32465a !important;
  }
  #frame #sidepanel #contacts ul li.contact .wrap {
    width: 88%;
    margin: 0 auto;
    position: relative;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #contacts ul li.contact .wrap {
      width: 100%;
    }
  }
  #frame #sidepanel #contacts ul li.contact .wrap span {
    position: absolute;
    left: 0;
    margin: -2px 0 0 -2px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid #2c3e50;
    background: #95a5a6;
  }
  #frame #sidepanel #contacts ul li.contact .wrap span.online {
    background: #2ecc71;
  }
  #frame #sidepanel #contacts ul li.contact .wrap span.away {
    background: #f1c40f;
  }
  #frame #sidepanel #contacts ul li.contact .wrap span.busy {
    background: #e74c3c;
  }
  #frame #sidepanel #contacts ul li.contact .wrap img {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin-right: 10px;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #contacts ul li.contact .wrap img {
      margin-right: 0px;
    }
  }
  #frame #sidepanel #contacts ul li.contact .wrap .meta {
    padding: 5px 0 0 0;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #contacts ul li.contact .wrap .meta {
      display: none;
    }
  }
  #frame #sidepanel #contacts ul li.contact .wrap .meta .name {
    font-weight: 600;
  }
  #frame #sidepanel #contacts ul li.contact .wrap .meta .preview {
    margin: 5px 0 0 0;
    padding: 0 0 1px;
    font-weight: 400;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    -moz-transition: 1s all ease;
    -o-transition: 1s all ease;
    -webkit-transition: 1s all ease;
    transition: 1s all ease;
  }
  #frame #sidepanel #contacts ul li.contact .wrap .meta .preview span {
    position: initial;
    border-radius: initial;
    background: none;
    border: none;
    padding: 0 2px 0 0;
    margin: 0 0 0 1px;
    opacity: .5;
  }
  #frame #sidepanel #bottom-bar {
    position: absolute;
    width: 100%;
    bottom: 0;
  }
  #frame #sidepanel #bottom-bar button {
    float: left;
    border: none;
    width: 50%;
    padding: 10px 0;
    background: #32465a;
    color: #f5f5f5;
    cursor: pointer;
    font-size: 0.85em;
    font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #bottom-bar button {
      float: none;
      width: 100%;
      padding: 15px 0;
    }
  }
  #frame #sidepanel #bottom-bar button:focus {
    outline: none;
  }
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: 1px solid #2c3e50;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #bottom-bar button:nth-child(1) {
      border-right: none;
      border-bottom: 1px solid #2c3e50;
    }
  }
  #frame #sidepanel #bottom-bar button:hover {
    background: #435f7a;
  }
  #frame #sidepanel #bottom-bar button i {
    margin-right: 3px;
    font-size: 1em;
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #bottom-bar button i {
      font-size: 1.3em;
    }
  }
  @media screen and (max-width: 735px) {
    #frame #sidepanel #bottom-bar button span {
      display: none;
    }
  }
  #frame .content {
    float: right;
    width: 60%;
    height: 100%;
    overflow: hidden;
    position: relative;
  }
  @media screen and (max-width: 735px) {
    #frame .content {
      width: calc(100% - 58px);
      min-width: 300px !important;
    }
  }
  @media screen and (min-width: 900px) {
    #frame .content {
      width: calc(100% - 340px);
    }
  }
  #frame .content .contact-profile {
    width: 100%;
    height: 60px;
    line-height: 60px;
    background: #f5f5f5;
  }
  #frame .content .contact-profile i {
    width: 40px;
    border-radius: 50%;
    float: left;
    margin: 11px 9px 10px 13px;
  }
  #frame .content .contact-profile p {
    float: left;
  }
  
  }
  #frame .content .contact-profile .social-media i:nth-last-child(1) {
    margin-right: 20px;
  }
  #frame .content .contact-profile .social-media i:hover {
    color: #435f7a;
  }
  #frame .content .messages {
    height: auto;
    min-height: calc(100% - 93px);
    max-height: calc(100% - 93px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  @media screen and (max-width: 735px) {
    #frame .content .messages {
      max-height: calc(100% - 105px);
    }
  }
  #frame .content .messages::-webkit-scrollbar {
    width: 8px;
    background: transparent;
  }
  #frame .content .messages::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, 0.3);
  }
  #frame .content .messages ul li {
    display: inline-block;
    clear: both;
    float: none;
    margin: 15px 15px 5px 15px;
    width: calc(100% - 25px);
    font-size: 0.9em;
  }
  #frame .content .messages ul li:nth-last-child(1) {
    margin-bottom: 20px;
  }
  #frame .content .messages ul li.sent i {
    margin: 8px 0px 0 8px;
    font-size:10px;
  
  }
  #frame .content .messages ul li.sent p {
    background: #435f7a;
    color: #f5f5f5;
    display:inline-block;
    min-width:80px;
  }
  #frame .content .messages ul li.replies i {
    margin: 8px 0 0 8px;
    font-size:10px;
  }
  #frame .content .messages ul li.replies p {
    background: #f5f5f5;
    float: right;
  }
  
  #frame .content .messages ul li p {
    display: inline-block;
    padding: 10px 15px;
    border-radius: 20px;
    max-width: 205px;
    line-height: 130%;
  }
  @media screen and (min-width: 735px) {
    #frame .content .messages ul li p {
      max-width: 300px;
    }
  }
  #frame .content .message-input {
    position: absolute;
    bottom: 0;
    width: 100%;
    z-index: 99;
  }
 .wrapper , .wrap  {
    position: relative;

  }
  #frame .content .message-input .wrap,  .wrapper input {
    font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
    float: left;
    border: none;
    width: calc(100% - 50px);
    padding: 11px 32px 10px 8px;
    font-size: 0.8em;
    color: #32465a;
  }
  @media screen and (max-width: 785px) {
    #frame .content .message-input .wrap, .wrapper input {
      padding: 15px 32px 16px 8px;
    }
  }
  #frame .content .message-input .wrap , .wrapper  input:focus {
    outline: none;
  }


  #frame .content .message-input .wrap , .wrapper  button {
    float: right;
    border: none;
    width: 50px;
    padding: 12px 0;
    cursor: pointer;
    background: #32465a;
    color: #f5f5f5;
  }
  @media screen and (max-width: 735px) {
    #frame .content .message-input .wrap , .wrapper  button {
      padding: 16px 0;
    }
  }
  #frame .content .message-input .wrap , .wrapper  button:hover {
    background: #435f7a;
  }
  #frame .content .message-input .wrap , .wrapper  button:focus {
    outline: none;
  }
  
  
  .form-popup {
  display: block;
  position: fixed;
  margin:auto;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.dcontainer {
  max-width: 300px;
  padding: 10px;
  background-color:#32465a;
}

/* Full-width input fields */
.dcontainer input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.dcontainer input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
#btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.dcontainer label{
    color:white;
}


/* Add some hover effects to buttons */
.dcontainer .btn:hover, .open-button:hover {
  opacity: 1;
}



</style>

</head>
<body>


<div id="frame">
	<div id="sidepanel">

        <div class="well" style="background-color:#32465a;"> <i class="fa fa-power-off" style="cursor:pointer;" id="shut" aria-hidden="true"></i>
            <p class="text-white" style=" display:inline; margin-left:10px;">Close the Room</p></div>
		<div id="contacts">
                 <h3 class="text-center" style="margin:10px;"> <i class="fa fa-users" style="margin-right:10px;"></i> Members of Room</h3>
                <hr>
			<ul>
				<li class="contact">
					<div class="wrap">
					
						
					</div>
				</li>
			</ul>
		</div>
		<div id="bottom-bar">
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Coder/Decoder</span></button>
                <button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
            </div>
	</div>
	<div class="content">
		<div class="contact-profile">
                <p style="background-color:#243140; border-radius:50%; width:40px; height:40px; margin-top:8px; margin-left:8px; margin-right:8px; ">	<i class="fa fa-user" style="width:20px;height:20px; color:white; position:relative;"></i></p>
			<p>Chat Room: <?php echo $roomname ?></p>
		</div>
		<div class="messages">
			<ul>
      <div class="allmsg">	
      </div>
      <!--   <div style="display:inline-flex;" ><div style="background-color:#243140; display:inline-block; border-radius:50%; width:25px; height:25px; margin-top:8px; margin-left:8px; margin-right:8px;"><i class="fa fa-user" style="width:20px;height:20px; color:rgba(255, 255, 255, 0.796); position:relative;"></i></div>
                    <p><span style="font-size:10px; float:right; top:0px;">~User</span><br>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                    </div> -->
  
			</ul>
		</div>
		<div class="message-input">
			<div class="wrapper">
			<input type="text"id="msgtext" placeholder="Write your message..." />
      <button id="submitmsg"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
			</div>
		</div>
	</div>
</div>



<div class="form-popup" id="myForm">
    <div class="dcontainer">
    <label for="name"><b>Name</b></label>
    <input type="text" id="uname" placeholder="Enter Your Name" autocomplete="off" required>
    <button class="btnid" id="btnname" >Save</button>
</div>
</div>

<script type="text/javascript">
var message;

  
$('document').ready(function(){
$("#btnname").click(function(){
  username=$("#uname").val();
  document.cookie=username;
  document.getElementById("myForm").style.display = "none";
  document.getElementById("frame").style.filter = "blur(0px)";
  $.get("users.php",{ room: '<?php echo $roomname ?>', uname: username,}, function(data, status){
    document.getElementsByClassName('wrap')[0].innerHTML = data; return false; 
  });
$('#submitmsg').click(function() {
  message = $("#msgtext").val();
  $.get("postmsg.php",{text: message, room: '<?php echo $roomname ?>', uname: username, ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'}, function(data, status){
    document.getElementsByClassName('allmsg')[0].innerHTML = data; return false; 
  });
  $("#msgtext").val("");
});
});

setInterval(somefun, 1500);
function somefun() {
  $.post("htcont.php", { room: '<?php echo $roomname ?>', uname: document.cookie },
  function(data, status){
    document.getElementsByClassName('allmsg')[0].innerHTML = data; });

if(document.cookie)
{
  document.getElementById("myForm").style.display = "none";
  document.getElementById("frame").style.filter = "blur(0px)";
    $.post("showusers.php", { room: '<?php echo $roomname ?>', uname: document.cookie},
     function(data, status){
    document.getElementsByClassName('wrap')[0].innerHTML = data; });
  }
/* if(document.cookie)
{
  document.getElementById("myForm").style.display = "none";
  $(".meta").html('<p class="newuname" style="display:inline;">'+document.cookie+'</p> <i style="float:right; cursor:pointer;" title="exit" class="fa fa-sign-out" onclick="del()"></i>');
  
} */
}
});

function del() {
  var d = new Date();
  var val=document.cookie;
  $.post("deleteuser.php", { room: '<?php echo $roomname ?>', uname: val},
     function(data, status){
    document.getElementsByClassName('wrap')[0].innerHTML = data; return false;});
  document.cookie = "" + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
  $('.'+val).html('<p class="newuname" style="display:inline-flex;"><span class="busy"></span><i class="fa fa-user" ></i><div style="margin-right:10px; display:inline; margin-top"10px;></div>'+val+'-Offline</p>');
  window.location="/chatroom";
}


  $("#shut").click(function(){
  $.post("deleteall.php", { room: '<?php echo $roomname ?>'},
     function(data, status){
      if(data.includes("success"))
      {
        del();
      }
      else{
        alert("Sorry, You can not delete this group now.");
      }
    });
    
});


</script>

</body></html>