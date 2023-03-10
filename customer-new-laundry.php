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
                            <a href="l_home.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                     <form action="code.php" method="POST">

                                    <div class="mb-3">
                                        <label>Customer ID</label>
                                        <input type="text" name="ID" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Laundry Type</label>
                                        <input type="text" name="type" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="text" name="qty" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date Received</label>
                                        <input type="date" name="date" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="save_laundry" class="btn btn-primary">
                                            Update customer
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