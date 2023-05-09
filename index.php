<?php
	include("config.php");
	if(isset($_SESSION['username']))
	{
		header("location:home.php");
	}
	if(!empty($_POST))
	{
		$un = mysqli_real_escape_string($con,$_POST['username']);
		$pass = mysqli_real_escape_string($con,sha1($_POST['password']));
		$qr = mysqli_query($con,"SELECT * FROM admin WHERE username = '$un' AND password = '$pass'");
		if(mysqli_num_rows($qr) == 1)
		{
			$_SESSION['username'] = $_POST['username'];
			header("location:home.php");
		}
		else
		{
			$msg = "Incorrect details";
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FLAUNEL</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Flaunel</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="contact.php" id="navbarDropdown" role="button">
                  Contact Us</a>
                
              </li>
              
            </ul>
            <form class="d-flex">
              
              <a href="index.php" class="btn btn-light" >Login</a>
            </form>
          </div>
        </div>
      </nav>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images\1.jpg" class="d-block w-100" alt="..." height="400">
          </div>
          <div class="carousel-item">
            <img src="images\2.jpg" class="d-block w-100" alt="..." height="400">
          </div>
          <div class="carousel-item">
            <img src="images\3.jpg" class="d-block w-100" alt="..." height="400">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<div class="container py-4">
    <h5 class="display-5">Admin Login</h5>
    <span style="color:red;font-weight:bold;"><?php if(isset($msg)) { echo $msg."<br><br>"; } ?></span>
    <form class="row g-3" method="post" action="">
        <div class="col-auto">
          <input type="text" class="form-control" name="username" id="inputEmail2" placeholder="Enter username">
        </div>
        <div class="col-auto">
          <label for="inputPassword2" class="visually-hidden">Password</label>
          <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Enter password">
        </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
        </div>
      </form>
</div>

<div class="container">
    <span class="text-muted">&copy; S.B.Jain,Nagpur</span>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>