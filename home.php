<?php
	include("config.php");
	if(!isset($_SESSION['username']))
	{
		header("location:index.php");
	}
	$data = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM admin WHERE username = '".$_SESSION['username']."'"));
	if(!empty($_POST))
	{
		mysqli_query($con,"UPDATE data SET message = '".$_POST['dd']."', last_update = '".date('d-m-y  h:i a')."' WHERE day = '".$_POST['day']."'");
	}
// Add Values
	$qr = mysqli_query($con,"SELECT * FROM data");
	$x = 0;
	while($m = mysqli_fetch_array($qr))
	{
			$mData[$x] = $m['message'];
			$lastUpdate[$x] = $m['last_update'];
			$x++;
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
              
              <li class="nav-item ">
                <a class="nav-link" href="#" id="navbarDropdown" role="button">
                  <?php echo "User: ".ucwords($data['name']);?></a>
                
              </li>
              
            </ul>
            <form class="d-flex">
              
             <a class="btn btn-light" href="logout.php">Logout</a>
            </form>
          </div>+
        </div>
      </nav>
<div class="container py-4">
    <h5 class="display-5">Welcome to Flaunel</h5>
    <br>
    <!-- ACCORDIAN MAIN BODY START -->
    <div class="accordion" id="accordionExample">
    <!-- ACCORDIAN ITEM START -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <strong>SUNDAY</strong> [Last Update: <?php echo $lastUpdate[0];?>]
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="sunday">
        <div class="mb-3">
  <label for="sunday" class="form-label">Quote for Sunday</label>
  <input type="hidden" name="day" value="sunday">
  <input type="text" class="form-control" id="sunday" placeholder="Enter Quote/Message/News for Sunday" name="dd" value="<?php echo $mData[0];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
    <!-- ACCORDIAN ITEM END -->
        <!-- ACCORDIAN ITEM START -->
        <div class="accordion-item">
    <h2 class="accordion-header" id="heading2">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
        <strong>MONDAY</strong> [Last Update: <?php echo $lastUpdate[1];?>]
      </button>
    </h2>
    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="monday">
        <div class="mb-3">
  <label for="Monday" class="form-label">Quote for Monday</label>
  <input type="hidden" name="day" value="monday">
  <input type="text" class="form-control" id="Monday" placeholder="Enter Quote/Message/News for Monday" name="dd" value="<?php echo $mData[1];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
    <!-- ACCORDIAN ITEM END -->
    <!-- ACCORDIAN ITEM START -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading3">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
        <strong>TUESDAY</strong> [Last Update: <?php echo $lastUpdate[2];?>]
      </button>
    </h2>
    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="tuesday">
        <div class="mb-3">
  <label for="Tuesday" class="form-label">Quote for Tuesday</label>
  <input type="hidden" name="day" value="tuesday">
  <input type="text" class="form-control" id="Tuesday" placeholder="Enter Quote/Message/News for Tuesday" name="dd" value="<?php echo $mData[2];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
    <!-- ACCORDIAN ITEM END -->
    <!-- ACCORDIAN ITEM START -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading4">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
        <strong>WEDNESDAY</strong> [Last Update: <?php echo $lastUpdate[3];?>]
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="wednesday">
        <div class="mb-3">
  <label for="Wednesday" class="form-label">Quote for Wednesday</label>
  <input type="hidden" name="day" value="wednesday">
  <input type="text" class="form-control" id="sunday" placeholder="Enter Quote/Message/News for Wednesday" name="dd" value="<?php echo $mData[3];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
    <!-- ACCORDIAN ITEM END -->
    <!-- ACCORDIAN ITEM START -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
        <strong>THRUSDAY</strong> [Last Update: <?php echo $lastUpdate[4];?>]
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="thursday">
        <div class="mb-3">
  <label for="Thrusday" class="form-label">Quote for Thrusday</label>
  <input type="hidden" name="day" value="thursday">
  <input type="text" class="form-control" id="Thrusday" placeholder="Enter Quote/Message/News for Thrusday" name="dd" value="<?php echo $mData[4];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
    <!-- ACCORDIAN ITEM END -->
    <!-- ACCORDIAN ITEM START -->
    <div class="accordion-item">
    <h2 class="accordion-header" id="heading6">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
        <strong>FRIDAY</strong> [Last Update: <?php echo $lastUpdate[5];?>]
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="friday">
        <div class="mb-3">
  <label for="Friday" class="form-label">Quote for Friday</label>
  <input type="hidden" name="day" value="friday">
  <input type="text" class="form-control" id="Friday" placeholder="Enter Quote/Message/News for Friday" name="dd" value="<?php echo $mData[5];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
   <!-- ACCORDIAN ITEM END -->
  <!-- ACCORDIAN ITEM START -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="heading7">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
        <strong>SATURDAY</strong> [Last Update: <?php echo $lastUpdate[6];?>]
      </button>
    </h2>
    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <form method="post" action="" name="saturday">
        <div class="mb-3">
  <label for="Saturday" class="form-label">Quote for Saturday</label>
  <input type="hidden" name="day" value="saturday">
  <input type="text" class="form-control" id="Saturday" placeholder="Enter Quote/Message/News for Saturday" name="dd" value="<?php echo $mData[6];?>">
</div>
<div class="mb-3">
  <input type="submit" class="btn btn-dark" value="Update">
</div>
        </form>
      </div>
    </div>
  </div>
   
    <!-- ACCORDIAN ITEM END -->
</div>
<!-- ACCORDIAN MAIN BODY END -->
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