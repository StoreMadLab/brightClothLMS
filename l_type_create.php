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

    <title>AP_LMS-laundtypedit</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Laundry Type Edit
                            <a href="laundry-type.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        
                                <form action="code.php" method="POST">
                                    <div class="mb-3">
                                        <label>Laundry Type</label>
                                        <input type="text" name="l_type_desc" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Laundry Type Price</label>
                                        <input type="text" name="l_type_price" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="created_laundry_type" class="btn btn-primary">
                                            Create New Laundry Type
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