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

    <div class="jumbotron">
  <h1>Welcome to Julie Ashby design World</h1>
  <p> Hi, I’m Julie Ashby, an experienced interior designer and color specialist based in New Zealand.
        With a passion for creating transformative spaces, I blend my expertise in industrial, product, 
        and textile design to craft unique commercial and residential interiors that inspire and reflect individuality.</p>
</div>

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
                <textarea class="form-control" name="comments">
                </textarea>
            </div>
             <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center">@Jashbydesign</p>
  </footer>
    </body>
</html>