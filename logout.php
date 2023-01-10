<?php
session_start();
require 'dbcon.php';
if (empty($_SESSION['id']));
    header('Location:index.php');
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    session_destroy();
    

    
    ?>
</body>
</html>