<?php
include_once('../DB/config.php');
include_once('../Model/edit.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    // $userArr = [
    //     'first_name'       => $_POST['first_name'],
    //     'last_name'        => $_POST['last_name'],
    //     'email'            => $_POST['email'],
    // ];

//var_dump( updateuser($conn, $id, $first_name, $last_name, $email) );exit;

    if (updateuser($conn, $id, $first_name, $last_name, $email)) {
        header('location:../pages/index.php');
    } else {
        echo "Cant Update";
    }
}
