<?php
// Start the session
//session_start();
include_once('../DB/config.php');
// create a funtion

function loginUser($conn , $email,$password){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email and password=:password LIMIT 1");
    $stmt->execute([
        ':email' =>$email,
        ':password' =>md5($password)
    ]);
    $result = $stmt->fetch();
    return $result;

}

function showdata ($conn,$email,$password){
   // $stmt= $conn->prepare("INSERT INTO from users(email,password) VALUES(':gurjeet@gmail.com',':123')");
     //$result =$stmt->execute(//[
        //  ':email' =>     $email,
        // ':password'=> md5($password)
    //]
    $data=[
        'email'=>$email,
        'password'=>$password

    ];
    //print_r($_POST);
$stmt = "INSERT INTO users (email,password) VALUES(:email,:password)";
$stmt =$conn->prepare($stmt);
$stmt->execute($data);
 

   // return $result;
}

?>






