<?php
include_once('header.php');
include_once("../Model/delete.php");

if( isset($_GET['id']) ):
    $userdata = deleteuser($conn,$_GET['id']); 
    header('location:'.BASE_URL."/pages/index.php");
   ?> 
<?php endif;?>

        