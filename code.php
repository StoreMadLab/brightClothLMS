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
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO customer (C_name, Ph_no, Address) VALUES ('$name','$phone','$address')";

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


if(isset($_POST['update_laundry_type']))
{
    $id = mysqli_real_escape_string($con, $_POST['l_type_id']);
    $name = mysqli_real_escape_string($con, $_POST['l_type_desc']);
    $price = mysqli_real_escape_string($con, $_POST['l_type_price']);

    $query = "UPDATE l_type SET l_type_desc='$name', l_type_price='$price' WHERE l_type_id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Laundry Type Updated Successfully";
        header("Location: l_create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Laundry Type Not Updated";
        header("Location: l_create.php");
        exit(0);
    }

}

if(isset($_POST['save_laundry']))
{
    $ids = mysqli_real_escape_string($con, $_POST['ID']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $qty = mysqli_real_escape_string($con, $_POST['qty']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $query = "INSERT INTO sales (l_type_id, c_id, qty, date_rcv) VALUES ('$type','$ids','$qty','$date')";

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

if(isset($_POST['delete_cla']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['delete_cla']);

    $query = "DELETE FROM sales WHERE C_id='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: l_home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: l_home.php");
        exit(0);
    }
}
?>