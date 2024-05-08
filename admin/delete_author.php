<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $query = "delete from authors where author_id = $_GET[aid]";
    $query_run = mysqli_query($connection,$query); 
?>
<script>
    alert("Author Deleted!");
    window.location.href="manage_author.php";
</script>