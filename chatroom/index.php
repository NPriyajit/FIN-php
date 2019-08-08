<html>

<head>
<title>Chat System</title>
<link rel="icon" src="/pics/favicon.png">
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg p-3 px-md-4 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal col-sm-1" style="justify-textl:right;">F-I-N</h5>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03"  >
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" style="color:black;"  href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:black;"  href="about.html">About Us</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" style="color:black;" href="contact.html">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color:black;" href="privacy.html">Privacy Policy</a>
              </li>
</ul>
</div>


<form  class="input-group my-md-0 mr-md-5 my-2 " style="max-width:500px;" action="search.php" method="get">
        <input type="text" class="form-control " placeholder="Search..." name="query" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
        </div>

      </form> 

 
</nav>


<div class="position-relative overflow-hidden m-5 p-lg-5 m-md-3 py text-center bg-light" style="height:660px; ">
  <div class="col-md-7 mx-auto " style="margin-top:100px;">
    <h2 class="display-2">Friends In Need</h2>
    <p class="lead ">FIN as known as Friends in need, is basically a chat system, in which you can talk with your friend when needed.</p>
 </div>
 
<div class="input-group p-md-3 mx-auto" style="max-width:600px;">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">https://fin.com/</span>
  </div>
  <input type="text" class="form-control" id="basic-url" placeholder="enter room name..." name="urlpath" aria-describedby="basic-addon3" autofocus>
  <div class="input-group-append">
    <button class="btn btn-outline-success" type="submit" id="button-addon3">Check Room</button>
  </div>
</div>
<div class="error" style="color:tomato;">
</div>
<button class="btn btn-outline-secondary mt-3" id="scroller"  href="#" onclick="window.scrollBy(0,750)">Scroll Down</button>
</div>

<div class="position-relative overflow-hidden m-5 p-lg-5 m-md-3 py bg-dark " style="height:650px;">
   <div class="text-white mt-5 ml-5" >
   <h1 class="display-3">FIN- Friends In Need</h1>
   <p class="mt-5"><i class="fa fa-circle mr-5"></i>FIN is bascially acronomy for Friends in Need. We developed this website so that you can communicate with your freinds by only sharing the link to your friend.</p>
   <p class="mt-5"><i class="fa fa-circle mr-5"></i><span class="badge badge-primary badge-pill"></span>We provided the most security communication from one to another, you can also talk to your friend by code the text, and friends can not see that text.</p>
   <p class="mt-5"><i class="fa fa-circle mr-5"></i>Share the key to your friend to see that coded text. We also Provide a text coder and de-coder in our website where you can simply decode the Coded text.
   <p class="mt-5"><i class="fa fa-circle mr-5"></i>For Decode the coded text, just put the coded text and the key provided by your friend and it will show the output.</p>
   <p class="mt-5"><i class="fa fa-circle mr-5"></i>After creating the room, you can add unlimited friends to communicate with you, and they can message you at the same time.</p>
    </div>
</div>

<div class="position-relative overflow-hidden m-5 p-lg-5 m-md-3 py bg-light " style="height:650px;">
   <div class="mt-5 ml-5" ></div>
</div>

<script type="text/javascript">
$("document").ready(function(){
$("#button-addon3").click(function(){
  var url= $("#basic-url").val();
  $.post("checkroom.php", {  urlpath: url },
  function(data, status){
    if(!data.includes("/"))
    {
    document.getElementsByClassName('error')[0].innerHTML = data;
    }
    else{
      window.location=data;
    }
  });
});

});
</script>
     
</body>