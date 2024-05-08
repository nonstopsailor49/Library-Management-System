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
    body {
      background-image: url('library.jpg'); /* Path to your library background image */
      background-size: cover; /* Cover the entire viewport */
      background-repeat: no-repeat; /* Do not repeat the background image */
      background-attachment: fixed; /* Fixed background image */
      color: #fff; /* Set text color to white for better readability */
    }

    #side_bar {
      background-color: #8ec3eb;
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
          <a class="nav-link" href="admin/index.php">Admin Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">User Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Register</a>
        </li>
      </ul>
    </div>
  </nav><br>
  <span>
    <marquee behavior="scroll" direction="left" scrollamount="8">
      "Library: where Knowledge Finds Its Home, and Minds Find Their Wings."
    </marquee>
  </span><br>
  <div class="row">
  <div class="col-md-8"></div>
    <div class="col-md-3" id="side_bar">
      <h5>Our Services</h5>
      <ul>
        <li>Internet Access</li>
        <li>Multimedia Materials</li>
        <li>Children's and Teen Section</li>
        <li>Periodicals and Journals</li>
        <li>Wide range of books</li>
        <li>Study Spaces</li>
      </ul>
      <h5>Library Time</h5>
      <ul>
        <li>Sunday to Thursday</li>
        <ul type="circle">
          <li>Opening Time: 11 am</li>
          <li>Closing Time: 6 pm</li>
        </ul>
        <li>Friday</li>
        <ul type="circle">
          <li>Opening Time: 11 am</li>
          <li>Closing Time: 3 pm</li>
        </ul>
        <li>Saturday: Holiday </li>
      </ul>
    </div>
   
  </div>
</body>

</html>
