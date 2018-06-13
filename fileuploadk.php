<?php
$name=$_FILES["file"]["name"];
$size=$_FILES["file"]["size"];

$type=$_FILES["file"]["type"];

$tmp_name=$_FILES["file"]["tmp_name"];
if(isset($name))
{
	if(!empty($name))
	{
		$location="rippleimg/";
		if(move_uploaded_file($tmp_name,$location.$name))
		{

		}
	}
	else
	{
		echo "<br>";
		echo "please choose file";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Josefin+Slab|Orbitron" rel="stylesheet">


		 <style>
		 /* Make the image fully responsive */
		 body{


		     font-family: 'Orbitron', sans-serif;

		     font-family: 'Josefin Slab', serif;


		 }
		 .navbar{
		   border-bottom:#008ed6 3px solid;
		   opacity:0.9;
		 }

		.container1
		{
			   background:#b3b3ff;
padding-top:10px;
		}
		.container11{
			border-radius: 25px;
    border: 5px solid #fff;
    padding:5px;
    width: 100%;
    height:auto;
		}
                .container11:hover
{
/* background-color:	rgb(51, 156, 255);
-ms-transform: scale(1.05); /* IE 9 */
 /* -webkit-transform: scale(1.05); /* Safari 3-8 */
 /* transform: scale(1.05);
 box-shadow: 0 0 5px 2px #282a2d;
   line-height: 1.4; */ */ */
}

	section{
		 /* Location of the image */
background:url(<?php echo $location.$name;?>);

   /* Background image is centered vertically and horizontally at all times */
   background-position: center ;

   /* Background image doesn't tile */
   background-repeat: no-repeat;

   /* Background image is fixed in the viewport so that it doesn't move when
      the content's height is greater than the image's height */


   /* This is what makes the background image rescale based
      on the container's size */
   background-size: cover;

   /* Set a background color that will be displayed
      while the background image is loading */
   background-color: #464646;

width:100%;
height:700px;
 }


 @media(max-height:560px)
  {
		section{
			 /* Location of the image */
	background:url(<?php echo $location.$name;?>);

	   /* Background image is centered vertically and horizontally at all times */
	   background-position: center ;

	   /* Background image doesn't tile */
	   background-repeat: no-repeat;

	   /* Background image is fixed in the viewport so that it doesn't move when
	      the content's height is greater than the image's height */


	   /* This is what makes the background image rescale based
	      on the container's size */
	   background-size: cover;

	   /* Set a background color that will be displayed
	      while the background image is loading */
	   background-color: #464646;

	width:100%;
	height:400px;
	 }
 }

		</style>

	</head>
	<body>
<!-- <div class="head1">
<center><h1 display='4'>Ripple Effect</h1></center>
<br>
</div> -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	<div class="container">
		<a href="index.html" class="navbar-brand"><h3>Sandeep</h3></a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" type="button" name="button">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse" >
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
					<a href="#home" class="nav-link"></a>
			</li>
			<li class="nav-item">
					<a href="#Corousle" class="nav-link"></a>
			</li>
			<li class="nav-item">
					<a href="#WaterRipple" class="nav-link"></a>
			</li>
			<li class="nav-item">
					<a href="#ApplyRipple" class="nav-link"></a>
			</li>

			<li class="nav-item">
					<a href="#About" class="nav-link"></a>
			</li>

		</ul>

	</div>
	</div>

</nav>
<br>
<br>

		<div class="container1">r
			<center>----</center>
			<br>
		<center>	<h1>Water Ripple Effect on YOurs Pic</h1></center>
    <div class="container">
		<div class="container11">

  <section>

   </section>
	   </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="jquery.ripples-min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{
$("section").ripples(
{
 dropRadius:15,
 perturbance:0.05,
}
);
})
</script>
<div class="container">
<br><br>
<h1 align="center"> Enjoy Ripple Effect</h1>

   <h3>> Hello this is sandeep this site only for seeing yours image in WaterRipple Effect</h3>
    <h3>> It only for fun i think this site make u some exitiment and have fun</h3>
    <h3>> And Importent think is Dont forget to share this website to yours friends and family</h3>
<br>
<h3> Find out  meaning of this words</h3>
<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
<br>

	</div>
	</div>
</body>
</html>
