<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <title>LMS-Home</title>
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
            <button type="button" class="btn btn-primary">New Laundry</button>
            <button type="button" class="btn btn-success">Claim</button>
            <button type="button" class="btn btn-danger">Delete</button><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Weight</th>
                            <th scope="col">Type</th>
                            <th scope="col">Date-Received</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><input type="checkbox"></th>
                            <td>Mark</td>
                            <td>1</td>
                            <td>12</td>
                            <td>Blanket</td>
                            <td>31-12-2022</td>
                            <td>240</td>
                            <td><button onclick="editLaundry('26')" type="button" class="btn btn-warning btn-xs">
                                    Edit
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button></td>
                        </tr>
                        <tr>
                            <th scope="row"><input type="checkbox"></th>
                            <td>Harry</td>
                            <td>2</td>
                            <td>10</td>
                            <td>Blanket</td>
                            <td>02-01-2023</td>
                            <td>200</td>
                            <td><button onclick="editLaundry('26')" type="button" class="btn btn-warning btn-xs">
                                    Edit
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button></td>
                        </tr>
                        <tr>
                            <th scope="row"><input type="checkbox"></th>
                            <td>Cam</td>
                            <td>1</td>
                            <td>6</td>
                            <td>Clothes</td>
                            <td>31-12-2022</td>
                            <td>60</td>
                            <td><button onclick="editLaundry('26')" type="button" class="btn btn-warning btn-xs">
                                    Edit
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                </button></td>
                        </tr>
                </table>

                <br>
                <br>
            </div>
        </div>
</body>

</html>