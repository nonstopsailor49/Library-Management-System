<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $query = "delete from category where cat_id = $_GET[cid]";
    $query_run = mysqli_query($connection,$query); 
?>
<script>
    alert("Category Removed!");
    window.location.href="manage_category.php";
</script>