<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>




  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   &nbsp;   &nbsp;   &nbsp;   &nbsp; <a class="navbar-brand" href="#">LiveToCode</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courses.php">Free Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pro.php">Paid Courses</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img1.jpg" alt="Los Angeles" width="1100" height="500">
        <div class="carousel-caption">
          <h3>LiveToCode</h3>
          <p>Learn In-Demand Career Skills From Experts In Your Chosen Field. No Relevant Experience Or Degree Is Required To Enroll.Get World-Class Learning On-Demand.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img2.jpg" alt="Chicago" width="1100" height="500">
        <div class="carousel-caption">
          <h3>LiveToCode</h3>
          <p>Learn In-Demand Career Skills From Experts In Your Chosen Field. No Relevant Experience Or Degree Is Required To Enroll.Get World-Class Learning On-Demand.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/img3.jpg" alt="New York" width="1100" height="500">
        <div class="carousel-caption">
          <h3>LiveToCode</h3>
          <p>Learn In-Demand Career Skills From Experts In Your Chosen Field. No Relevant Experience Or Degree Is Required To Enroll.Get World-Class Learning On-Demand.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>



  <section class="my-5">
    <div>
      <h2 class="text-center">About Us</h2> 
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-12"> 
        <img src="img/3.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12"> 
        <h2 class="display-4">Live To Code</h2>
        <p class="py-3"> Learn In-Demand Career Skills From Experts In Your Chosen Field. No Relevant Experience Or Degree Is Required To Enroll.Get World-Class Learning On-Demand.
          </p>
          <a href="courses.php" class="btn btn-success">Free Courses</a>
       &nbsp;   <a href="pro.php" class="btn btn-success">Paid Courses</a>
      </div>
    </div>
  </section>


<section class="my-5">
      <div class="py-5">
        <h1 class="text-center">Contact Us</h1>
      </div>




      <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST">
          <div class="form-group">
            <label>Username</label>
              <input type="text" name="user" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Email Id</label>
              <input type="text" name="email" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Mobile</label>
              <input type="text" name="mobile" autocomplete="off" class="form-control">
          </div>
          <div class="form-group">
            <label>Comment</label>
          <textarea class="form-control" name="comment"></textarea>
           </div>
            <button type="submit" class="btn btn-success">Submit</button>

        </form>

      </div>

</section>









<footer>
  <p class="p-3 bg-dark text-white text-center">Contact Us - livetocode69@gmail.com
  </p>
</footer>












  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>