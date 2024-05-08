<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $book_no="";
    $book_name="";
    $book_author="";
    $issue_date="";
	$query = "select book_no,book_name,book_author,issue_date from issued_books
    where  roll = $_SESSION[roll] and status = 1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
  </nav>
  <span>
    <marquee behaviour="scroll" direction="left" scrollamount="8">
      "Library: where Knowledge Finds Its Home, and Minds Find Their Wings."
    </marquee>
  </span><br><br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form >
            <table class="table-bordered" width:"900px" style="text-align: center">  
            <tr>
                <th>Book Number</th>
                <th>Book Name</th>
                <th>Book Author</th>
                <th>Issue Date</th>
            </tr>
            <?php
                $query_run = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
                <td><?php echo $row['book_no']; ?></td>
                <td><?php echo $row['book_name']; ?></td>
                <td><?php echo $row['book_author']; ?></td>
                <td><?php echo $row['issue_date']; ?></td>
            </tr>
            <?php } ?>
            </table>
        </form>
    </div>
    <div class="col-md-2"></div>
  </div>
</body>
</html>