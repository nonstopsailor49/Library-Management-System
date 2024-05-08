<?php
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_mgmt");
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]',
    '$_POST[password]',$_POST[roll],$_POST[number],'$_POST[level]','$_POST[program]','$_POST[address])";
    $query_run = mysqli_query($connection, $query);
?>
<script>
    alert("Registration Complete! You can login now!!");
    window.location.href="index.php";
</script>