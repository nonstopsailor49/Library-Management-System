<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $name="";
    $email="";
    $number="";
    $roll="";
    $level="";
    $program="";
    $address="";
    $query = $query = "select * from users where email = '$_SESSION[email]'";;
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $name=$row['name'];
        $email=$row['email'];
        $number=$row['number'];
        $roll=$row['roll'];
        $level=$row['level'];
        $program=$row['program'];
        $address=$row['address'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

  <script type="text/javascript" src="bootstrap/js/juqery_latest.js"></script>

  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

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
        <a class="navbar-brand" href="user_dashboard.php">Library Management System</a>
      </div>
      <font style="color:white"><span><strong>Welcome <?php echo $_SESSION['name'];?></strong></span></font>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"data-toggle="dropdown">My Profile</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="view_profile.php">View Profile</a>
            <a class="dropdown-item"href="edit_profile.php">Edit Profile</a>
            <a class="dropdown-item"href="change_password.php">Change Password</a>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
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
  <font style="color:white"><span><strong>Welcome <?php echo $_SESSION['name'];?></strong></span></font>
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <form action="update.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name"  class="form-control" value="<?php echo $name; ?> ">
        </div>
        <div class="form-group">
          <label for="name">Email:</label>
          <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
        </div>
        <div class="form-group">
          <label for="name">Roll Number:</label>
          <input type="text" name="roll" class="form-control"value="<?php echo $roll; ?>" >
        </div>
        <div class="form-group">
          <label for="name">Number:</label>
          <input type="text" name="number"class="form-control"value="<?php echo $number; ?>">
        </div>
        <div class="form-group">
          <label for="name">Level:</label>
          <input type="text" name="level"class="form-control" value="<?php echo $level; ?>">
        </div>
        <div class="form-group">
          <label for="name">Program:</label>
          <input type="text" name="program" class="form-control" value="<?php echo $program; ?>">
        </div>
        <div class="form-group">
          <label for="name">Address:</label>
          <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
        </div>
        <button class="btn btn-primary" name="update" type="submit">Update Changes</button>
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>