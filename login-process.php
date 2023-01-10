<?php
session_start();
require 'dbcon.php';

if(isset($_POST['login']))
{
    $user = $_POST['Username'];
    $pass = $_POST['Password'];

    $query = "SELECT * FROM `user` WHERE user_name='$user' AND u_pwd='$pass' ";
    $query_run = mysqli_query($con, $query);

    if(mysqli_fetch_array($query_run)>0)
    {
        echo '<h4>sucessful</h4>';
        header('location:home.php');
    }
    else
    {
        echo '<h4>uncessfull</h4>';
    }
}
?>