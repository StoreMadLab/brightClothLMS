<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LMS-HOME</title>
</head>

<body>
<div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-info bg-darken-lg">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="#"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline"><strong>Laundry Management System</strong></span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline"><button
                                        type="button" class="btn btn-secondary">Home</button></span>
                            </a>
                        </li>
                        <li>
                            <a href="laundry-type.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><button
                                        type="button" class="btn btn-secondary">Type</button></span></a>
                        </li>
                        <li>
                            <a href="Report.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><button
                                        type="button" class="btn btn-secondary">Report</button></span></a>
                        </li>
                        <li>
                            <a href="index.php" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline"><button
                                        type="button" class="btn btn-secondary">Log-Out</button></span></a>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>


            <div class="col py-3">
            <button type="button" class="btn btn-success">New Type</button><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Laundry Type Decription</th>
                            <th scope="col">Price/Kg</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>


        </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>