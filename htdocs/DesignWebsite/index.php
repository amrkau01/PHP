<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
  }
  </style>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="cc/style.css" >
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <?php include 'menu.php' ?>
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
        <img src="images/cc1.jpg" alt="Los Angeles" height="600px">
        </div>
        <div class="carousel-item">
        <img src="images/cc4.jpg" alt="Chicago" height="600px">
        </div>
        <div class="carousel-item">
        <img src="images/cc5.jpg" alt="New York" height="600px">
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
  </div>
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About Us</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
       <div class="col-lg-6 col-md-6 col-12">
        <img src="images/cc3.jpg" class="img-fluid aboutimg">
       </div>
       <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">Welcome to Julie Ashby design World</h2>
        <p class="py-3">
        Hi, I’m Julie Ashby, an experienced interior designer and color specialist based in New Zealand.
        With a passion for creating transformative spaces, I blend my expertise in industrial, product, 
        and textile design to craft unique commercial and residential interiors that inspire and reflect individuality.
        </p>
        <a href="about.php" class="btn btn-success"> Know more </a>
       </div>
    </div>
    </div> 
  </section>
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Services</h2>
    </div>

     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                     <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                     <div class="card-body">
                         <h4 class="card-title">Beautiful homes</h4>
                         <p class="card-text">Some example text.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                     <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                     <div class="card-body">
                         <h4 class="card-title">Beautiful homes</h4>
                         <p class="card-text">Some example text.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                 </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                 <div class="card">
                     <img class="card-img-top" src="images/cc2.jpg" alt="Card image">
                     <div class="card-body">
                         <h4 class="card-title">Beautiful homes</h4>
                         <p class="card-text">Some example text.</p>
                         <a href="#" class="btn btn-primary">See Profile</a>
                     </div>
                 </div>
              </div>
         </div>
     </div> 
  </section>
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our Gallery</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/cc1.jpg"class="img-fluid pb-4">
            </div>
        </div>
    </div>
  </section>
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Please Enter Your Name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Please Enter Your Email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Please Enter Your Mobile">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"">
                </textarea>
            </div>
             <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">@Jashbydesign</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
    </body>
</html>