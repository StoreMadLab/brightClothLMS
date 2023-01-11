<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Customer Edit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Customer Edit
                            <a href="home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">


                        <form action="code.php" method="POST">
                            <input type="hidden" name="customer_id" value="<?= $customer['C_id']; ?>">

                            <div class="mb-3">
                                <label>Customer Name</label>
                                <input type="text" name="name" value="<?= $customer['C_name']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Phone</label>
                                <input type="text" name="phone" value="<?= $customer['Ph_no']; ?>" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Customer Address</label>
                                <input type="text" name="address" value="<?= $customer['Address']; ?>"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="save_customer" class="btn btn-primary">
                                    Created New Customer
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>