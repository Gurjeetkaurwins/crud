<?php
session_start();
include_once('../DB/config.php');
include_once('../Model/login.php');
//print_r($_POST);exit;
// if(isset($_POST['submit'])){

//     if(!empty($_POST['email']) && !empty($_POST['password'])){
//         $login = loginUser($conn,$_POST['email'],$_POST['password']);
//          if(!empty($login)){
//           $_SESSION['id'] = $login['id'];
//             $_SESSION['first_name'] = $login['first_name'];
//           $_SESSION['last_name'] = $login['last_name'];
//           $_SESSION['email'] = $login['email'];
//             header('location:'.BASE_URL.'/pages/index.php');
//          }else{
//            echo "Invaild User";
//        }
//    }else{
//        echo " All fields are number" ;
//      }
// }else{
//     echo "Something went wrong!";
//  }

if (isset($_POST)) {

    $email = $_POST['email'];
    $password = $_POST['password'];



    if (showdata($conn, $email, $password)) {
        header('location:../pages/index.php');
    } else {
        echo "Cant Update";
    }
}
