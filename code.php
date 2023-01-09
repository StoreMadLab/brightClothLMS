<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer WHERE C_id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: home.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $id = mysqli_real_escape_string($con, $_POST['customer_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "UPDATE customer SET C_name='$name', Ph_no='$phone', Address='$address' WHERE C_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: customer-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: customer-create.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
    $name = mysqli_real_escape_string($con, $_POST['C_name']);
    $phone = mysqli_real_escape_string($con, $_POST['Ph_no']);
    $address = mysqli_real_escape_string($con, $_POST['Address']);

    $query = "INSERT INTO customer (name,phone,address) VALUES ('$name','$phone','$address')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Customer Created Successfully";
        header("Location: customer-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: customer-create.php");
        exit(0);
    }
}

?>