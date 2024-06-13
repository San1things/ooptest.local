<?php

declare(strict_types=1);
include 'autoloader.inc.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $bday = $_POST['bday'];
    //for format
    // $formatted_date = date('Y-m-d H:i:s', strtotime($bday . ' 23:59:59'));

    $adduser = new UsersContr();
    echo $adduser->createUser($fname, $lname, $bday);
    header('location:../index.php');
    //echo '<script> alert("Succesfully Added"); </script>';
    // try {
        
    // } catch (TypeError $e) {
    //     echo "Error!: " . $e->getMessage();
    // }
}