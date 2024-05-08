<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
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
        <a class="navbar-brand" href="main.php">Library Management System</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Register</a>
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
    <div class="col-md-2"></div>
    <div class="col-md-8" id="main_content">
      <center><h3>User Registration</h3></center>
      <form action="register.php" method="post">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Email:</label>
          <input type="text" name="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Password:</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Roll Number:</label>
          <input type="text" name="roll" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Number:</label>
          <input type="text" name="number" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Level:</label>
          <input type="text" name="level" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Program:</label>
          <input type="text" name="program" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="name">Address:</label>
          <input type="text" name="address" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button> 
      </form>
    </div>
    <div class="col-md-2"></div>
  </div>
 
</body>
</html>