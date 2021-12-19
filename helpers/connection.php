<?php
    $DB_HOST = '';
    $DB_USER = '';
    $DB_PASS = '';
    $DB_NAME = '';

    $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME) or die("Error " . mysqli_error($con));
?>