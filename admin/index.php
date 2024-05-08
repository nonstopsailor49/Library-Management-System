<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">

  <script type="text/javascript" src="../bootstrap/js/juqery_latest.js"></script>

  <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>

  <style>
    #side_bar{
      background-color: beige;
      padding: 50px;
      width: 300px;
      height: 450px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../main.php">Library Management System</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../signup.php">Register</a>
        </li>
      </ul>
    </div>
  </nav><br>
  <span>
    <marquee behaviour="scroll" direction="left" scrollamount="8">
      "Library: where Knowledge Finds Its Home, and Minds Find Their Wings."
    </marquee>
  </span><br><br>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" id="main_content">
      <center><h3>Admin Login</h3></center>
      <form action="" method="post">
        <div class="form-group">
          <label for="name">Email:</label>
          <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Password:</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" name="login"class="btn btn-primary">Login</button>
        <?php 
                session_start();
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"library_mgmt");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
		?>
         </form>
    </div>
    <div class="col-md-4"></div>
  </div>  
</body>
</html>