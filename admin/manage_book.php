<?php
  include('functions.php');
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
        <a class="navbar-brand" href="admin_dashboard.php">Library Management System</a>
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
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#7FCDCD">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-left">
      <li class="nav-item">
        <a href="admin_dashboard.php" class="nav-link"> Admin Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a href="admin_dashboard.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Book</a>
        <div class="dropdown-menu">
        <a href="add_book.php" class="dropdown-item">Add New Book</a>
        <a href="manage_book.php" class="dropdown-item">Manage Book</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a href="admin_dashboard.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
        <div class="dropdown-menu">
        <a href="add_category.php" class="dropdown-item">Add New Category</a>
        <a href="manage_category.php" class="dropdown-item">Manage Category</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a href="admin_dashboard.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Author</a>
        <div class="dropdown-menu">
        <a href="add_author.php" class="dropdown-item">Add New Author</a>
        <a href="manage_author.php" class="dropdown-item">Manage Authors</a>
      </div>
      </li>
      <li class="nav-item">
        <a href="issue_book.php" class="nav-link">Issue Book</a>
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
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Book Number</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
        $connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"library_mgmt");
				$query = "select * from books";
				$query_run = mysqli_query($connection,$query);					
                while ($row = mysqli_fetch_assoc($query_run)) { ?>
                <tr>
                    <td><?php echo $row['book_name']; ?></td>
                    <td><?php echo $row['author_id']; ?></td>
                    <td><?php echo $row['cat_id']; ?></td>
                    <td><?php echo $row['book_no']; ?></td>
                    <td><?php echo $row['book_price']; ?></td>
                    <td>
                        <button class="btn" name=""><a href="edit_book.php?bn=<?php echo $row['book_no']; ?>">Edit</a></button>
                        <button class="btn" name=""><a href="delete_book.php?bn=<?php echo $row['book_no']; ?>">Delete</a></button>
                    </td>
                </tr>
            <?php   }   ?>
        </table>
    </div>
    <div class="col-md-2"></div>
  </div>
</body>
</html>