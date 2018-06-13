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
 .carousel-inner img {
     width: 100%;
     height: 600px;
 }

 .container1{
   overflow: hidden;
   padding-left:20px;
   padding-right:20px;
   height:600px;
   width: 100%;
background: 	rgb(229, 236, 255);
color:rgb(64, 64, 64);

 }
 .center-inner{
   padding: 10px 10px;
   height:500px;
   width:100%;
   overflow: hidden;
 }
.container2
{

  overflow: hidden;

  height:700px;
  width: 100%;
  background:	rgb(255, 230, 240);
  color:rgb(64, 64, 64);
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 10px;
  padding-bottom:20px;
}
.center-inner2
{

width:100%;
height:500px;
  float :center;
  border:solid white 1px;

  background:url(imgs/rail.jpg) ;
  background-position: center center;

  /* Background image doesn't tile */
  background-repeat: no-repeat;

  /* Background image is fixed in the viewport so that it doesn't move when
     the content's height is greater than the image's height */


  /* This is what makes the background image rescale based
     on the container's size */
  background-size: cover;
}
.container3
{
  overflow: hidden;
  padding-top: 5px;
  padding-left:10px;
  padding-right:10px;
  padding-bottom: 5px;
  height:450px;
  width: 100%;
  background:rgb(102, 179, 255);
    color:	rgb(64, 64, 64);
}
.center-inner3
{
  overflow: hidden;
    padding-top: 5px;
  padding-left:15px;
    padding-bottom: 5px;
  padding-right:15px;

}
.container4
{
  overflow: hidden;
  padding-left:15px;
  padding-right:15px;
  height:450px;
  width: 100%;
  background:rgb(229, 255, 229);
  color:	rgb(64, 64, 64);
}
.center-inner4
{
  padding: 10px 10px;
  height:300px;
  width:100%;
  radius:2%;
}
.container5
{
  overflow: hidden;
  padding-left:20px;
  padding-right:20px;
  height:120px;
  width: 100%;
  background: rgb(102, 102, 102);
}
.center-inner5
{
    padding: 10px 10px;
    height:100px;
    width:100%;
}
@media(min-width:960px)
{
  .col-sm-12 .con1{
     text-emphasis: 10px;
      color: red;
  }
}

 </style>
<link rel="stylesheet" href="ripplecss.css">
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <div class="container">
        <a href="index.html" class="navbar-brand">sandeep</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse" type="button" name="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse" >
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
              <a href="#Corousle" class="nav-link">Corousle</a>
          </li>
          <li class="nav-item">
              <a href="#WaterRipple" class="nav-link">WaterRipple</a>
          </li>
          <li class="nav-item">
              <a href="#ApplyRipple" class="nav-link">ApplyRipple</a>
          </li>

          <li class="nav-item">
              <a href="#About" class="nav-link">About</a>
          </li>

        </ul>

      </div>
      </div>

    </nav>
<!--home section-->
<header id="home-section">
  <div class="dark-overlay">
    <div class="home-inner">
      <div class="container">
        <div class="row over">
          <div class="col-lg-10 d-none d-lg-block ">
            <h1 class="dispaly-4"> RipplesEffect <strong>website</strong></h1>
            <br>
            <h3>  Hello Friends this is san Bellow you abserve sample RipplesEffect Image</h3>
               <br>

              <h3>    The purpose of this site is Enjoye Water Ripple Effect &
                  I hope You Enjoye to visit this site</h3>
              <br>

          </div>
              <div class="col-lg-2">

              </div>
            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</header>
<!--corocil img scrol-->

<section id="Corousle">
<div class="container1">
  <center>
  <h1 class="display-4">Corousle Effect</h1>
   </center>
   <div class="center-inner">
  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/3mb.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="imgs/gf1.jpeg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="imgs/backgf1.jpeg" alt="New York" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  </div>
</div>
</section>
<!-- Ripple Effect in image -->
<section id="WaterRipple">
  <div class="container2">
    <center>
    <h1 class="display-4">Water Ripple Effect</h1>
     </center>


     <div class="center-inner2">


 </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="jquery.ripples-min.js">
  </script>
  <script type="text/javascript">
  $(document).ready(function()
  {
  $(".center-inner2").ripples(
  {
   dropRadius:15,
   perturbance:0.05,
  }
  );
  })
  </script>
</section>
<!-- form creation-->
<section id="ApplyRipple">
  <div class="container3">
    <center>
    <h1 class="display-4">Upload any Pic</h1>
     </center>
     <div class="center-inner3">
       <div class="card bg-primary text-center card-form">
         <div class="card-body">
           <h3>Select any  Image</h3>
           <p><strong>Note:<strong> Select only image not any other files</p>
           <form action="fileuploadk.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <input type="file" class="form-control form-control-lg" name="file" >
             </div>

               <input type="submit" value="submit" name="submit" class="btn btn-outline-light btn-block">

             </form>
             </div>
     </div>
   </div>
 </div>
</section>
<!--about-->
<section id="About">
  <div class="container4">
    <div class="inner-center4">
      <div class="container">

      <div class="row">
        <div class="col-sm-12 con1">
    <center>  <h1 style="padding:10px;">About website</h1></center>
    <h5>> Hello this is sandeep this site only for seeing yours image in WaterRipple Effect</h5>
    <h5>> It only for fun i think this site make u some exitiment and have fun</h5>
    <h5>> And Importent think is Dont forget to share this website to yours friends and family</h5>
    <h5>> Other thing is this website work awesome in Desktop or laptop if u have system/laptop try to open this in system </h5>
    <h5>> one more thing is when WaterRippleEffect not work in yours mobile it definatly problem with yours browser please update your browser to support this Effect</h5>

</div>
</div>
  </div>
</div>
</div>

</section>
<!--footer-->
<div class="container5">
  <div class="inner-center5">
    <div class="container">

    <div class="row">
      <div class="col-sm-12 con1">
  <center>  <h1 style="padding:10px;">sandeep-kumar.ga</h1></center>

</div>
</div>
</div>
</div>
</div>
  </body>
</html>
