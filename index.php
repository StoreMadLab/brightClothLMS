<?php
session_start();
require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LMS-Login</title>
    <link rel="stylesheet" href="css/styles.css">
    

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="bg">
        <h1 style="color: black;">Laundry Management System</h1>
    </div>

    <form action="" method="POST">

        <h3 class="logintype">Login</h3>
        <div class="form-field">
            <input type="text" name="Username" placeholder="Username" required />
        </div>

        <div class="form-field">
            <input type="password" name="Password" placeholder="Password" required />
        </div>

        <div class="form-field">
            <button class="btn" type="submit" name="login">Log in</button>
        </div>
    </form>
    <!-- partial -->

</body>

</html>