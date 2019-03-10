<?php
require("includes/common.php");
$name=mysqli_real_escape_string($con,$_POST['name']);
$password=mysqli_real_escape_string($con,$_POST['password']);
    $user_registration_query = "insert into (name,password) values ($name', '$password')";
    $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    $_SESSION['id']=mysqli_insert_id($con);
?>