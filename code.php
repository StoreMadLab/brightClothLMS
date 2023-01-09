<?php
session_start();
require 'dbcon.php';
 
if(isset($_POST['name of button']))
{


    $name = mysqli_real_escape_string($_POST['name']);

    $querry = "INSERT INTO tabl () values ()";

    $querry_run = mysqli_query($con, $querry);
    if($querry_run)
    {
        $_SESSION['message'] = "created sucessfully";
        header("Location: file.php");
        exit(0);
 
    }
    else
    {
        $_SESSION['message'] = "Not created ";
        header("Location: file.php");
        exit(0);
    }
}