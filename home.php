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
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>AP_LMS</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link href="assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="wrapper" style="  width: 90vw;
  min-height: 100%;
  position: fixed;
  overflow: hidden;
  margin-top: 18rem;
  margin-right: 10rem;">

        <!-- Top bar -->
        <div class="top_navbar">
            <!-- logo -->
            <div class="logo"><strong>LMS</strong></div>
            <!-- menu button -->
            <div class="menu">
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <span class="admin">Welcome Admin</span>
            </div>

        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar_inner">
                <ul>
                <li>
                        <a href="l_home.php">
                            <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                            <span class="text"><strong>Home</strong></span>
                        </a>
                    </li>
                    <li>
                        <a href="home.php">
                            <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <span class="text"><strong>Customer Details</strong></span>
                        </a>
                    </li>
                    <li>
                        <a href="laundry-type.php">
                            <span class="icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                            <span class="text"><strong>Laundry Type</strong></span>
                        </a>
                    </li>
                    <li>
                        <a href="report.php">
                            <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                            <span class="text"><strong>Report</strong></span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                            <span class="text"><strong>Logout</strong></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>





        <script type="text/javascript">
            var li_items = document.querySelectorAll(".sidebar ul li");
            var hamburger = document.querySelector(".hamburger");
            var wrapper = document.querySelector(".wrapper");




            li_items.forEach((li_item) => {
                li_item.addEventListener("mouseenter", () => {

                    li_item.closest(".wrapper").classList.remove("hover_collapse");

                })
            })
            hamburger.addEventListener("click", () => {

                hamburger.closest(".wrapper").classList.toggle("hover_collapse");
            })

        </script>




        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <small>Welcome Administrator!</small>
                </h1>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Home</h3>
                        <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip"
                                title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <!-- Start creating your amazing application! -->
                        <button id="newLaundry" name type="button" class="btn btn-success btn-sm"><a href="customer-new-create.php">New
                                Customer
                            </a>

                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                        </button>
                        <div id="table-laundry">
                            <div class="card-body">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Customer ID</th>
                                            <th>Customer Name</th>
                                            <th>Phone No</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM customer";
                                        $query_run = mysqli_query($con, $query);

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $customer) {
                                                ?>
                                                <tr>
                                                    <td><?= $customer['C_id']; ?></td>
                                                    <td>
                                                        <?= $customer['C_name']; ?>
                                                    </td>
                                                    <td><?= $customer['Ph_no']; ?></td>
                                                    <td>
                                                        <?= $customer['Address']; ?>
                                                    </td>
                                                    <td>
                                                        <a href="customer-create.php?id=<?= $customer['C_id']; ?>"
                                                            class="btn btn-success btn-sm">Edit</a>
                                                    
                                                        <form action="code.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete_customer"
                                                                value="<?= $customer['C_id']; ?>"
                                                                class="btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "<h5> No Record Found </h5>";
                                        }
                                        ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <!-- Footer -->
                    </div><!-- /.box-footer-->
                </div><!-- /.box -->

            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->