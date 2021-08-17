<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
	
  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/index.css" type="text/css">
   <!--core CSS --> 
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
   
  <title>Banking System</title>

	 </head>
<body>
  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

      echo "<script> alert('User created');
                               window.location='transfermoney.php';
                     </script>";
    }
  }
  ?>
  <?php
  include 'navbar.php';
  ?>

<div class="top-number">
                           <marquee width="100%" direction="left" height="19px">
								<b>Please do not press back button or refresh ,for more details contact : 08182-400500/400600</b>
							</marquee> 
        </div>
    	<div style="background-image: url(./bank1.jpg); height: 200px; width: 1500px; >
		

	
      
        <div class="row activity text-center mt-1">
          <h1><center>--->WELCOME FASTRACK BANK</h3>
          <h3></h3>
        </div>
	
  
    
      </div>
      <div class="col-12  ">
        <form class="form-container" style="background-color:#AED6F1" method="post">
          <div class="myform">
            <div class="form-group">
              <label for="Name">Enter the Name</label>
              <input class="form-control" placeholder="Name" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="Email">Enter the Email or id </label>
              <input class="form-control" placeholder="Enter Email" type="email" name="email" required>
            </div>
            <div class="form-group mb-5">
              <label for="Balance">Enter the acc/Balance</label>
              <input class="form-control" placeholder="Balance" type="number" name="balance" required>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Click here to Submit form</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-2">
    <p style="font-family: poppins; font-size: 16px;">&copy 2021. Developed by <b>RAGHUVEERA V</b> <br> Sparks Foundation</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
