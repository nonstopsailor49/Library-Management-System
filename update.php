<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $query ="update users set name='$_POST[name]',email='$_POST[email]',roll='$_POST[roll]',
    number='$_POST[number]',level='$_POST[level]',program='$_POST[program]',address='$_POST[address]'";
    $query_run = mysqli_query($connection, $query);
?>
<script>
    alert("Updated Successfully!!");
    window.location.href="user_dashboard.php";
</script>