<?php
session_start();

include_once('../DB/config.php');

/*function loginUser($conn , $first_name,$last_name,$email,$password);

$stmt=$conn->prepare("SELECT * FROM users");
$stmt->execute([
    
]);
$result= $stmt->fatch();
return $result;*/
/*$stmt= array("first_name","last_name","email");
foreach($stmt as $value){
    echo "$value<br>";
}
session_start();
if(isset($_POST['submit']))
{
    header('location:index.php');
}
$a=1;
$stmt = $conn->prepare(
    "SELECT * FROM usres");
$stmt->execute();
$users = $stmt->fetchAll();
foreach($users as $user)*/

function userdata($conn){
$stmt = $conn->prepare(
    "SELECT * FROM users");
    $stmt->execute();
    return $stmt->fetchall();
}


?>

