<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>SAN ANTONIO VALLEY 2 SUBDIVISION</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style_home.css" rel="stylesheet" type="text/css"> 
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
    <link href="css/animate.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header id="header_wrapper">
    <div class="container">
       <div class="header_box">
           <div class="logo">San Antonio Valley 2</div>
	      <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
             <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
            </button>
          </div>
	        <div id="main-nav" class="collapse navbar-collapse navStyle">
		      	<ul class="nav navbar-nav" id="mainNav">
		    	     <li><a href="Homepage.php" class="scroll-link">Home</a></li>
		    	     <li><a href="About us.php" class="scroll-link">About</a></li>
		    	     <li><a href="Announcement.php" class="scroll-link">Announcement </a></li>
		    	     <li class="active"><a href="FAQs.php" class="scroll-link">FAQs</a></li>
               <li><a href="Officers.php" class="scroll-link">Officers</a></li>
		    	     <li><a href="Login.php" class="scroll-link">Login</a></li>
		    	 </ul>
          </div>
	      </nav>
      </div>
    </div>
</header>

<div class="jumbotron jum" style=" background-image: url(img/small.jpg)"> 
  <div class="text"><h4>San Antonio Valley 2 Subdivision Homeowners Association</h4> FAQs </div>
</div>

<div class="con_a">
    <button class="accordion">Q: Why choose San Antonio Valley 2 Subdivision?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Q: How San Antonio Valley 2 Subdivision manage?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Q: How do HOA boards enforce rules?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Q: What type of things can homeowners association regulate?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Q: What are the amenities?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

    <button class="accordion">Q: What are the fees?</button>
    <div class="panel">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>

</div>
<footer>
    <div class="footer_bottom"><span>San Antonio Valley 2 Subdivision<br>Contact Us: 091234435 </span> 
          <ul class="social">
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-instagram"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
    </div>
</footer>

  
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active_a");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>