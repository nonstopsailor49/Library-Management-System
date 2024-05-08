<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $query ="update admins set name='$_POST[name]',email='$_POST[email]',mobile='$_POST[mobile]'";
    $query_run = mysqli_query($connection, $query);
?>
<script>
    alert("Updated Successfully!!");
    window.location.href="admin_dashboard.php";
</script>