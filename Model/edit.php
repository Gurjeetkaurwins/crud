<?php
include_once('../DB/config.php');
function getUserByID($conn,$id,){
    $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
    $stmt->execute([
        ':id' =>$id
    ]);
    $result = $stmt->fetch();
    return $result;
}
function updateuser($conn,$id,$first_name,$last_name,$email){
    $stmt = $conn->prepare("UPDATE users SET first_name=:first_name,last_name=:last_name,email=:email where id=:id");
    $result = $stmt->execute([
        ':id' =>$id,
        ':first_name'=>$first_name,
        ':last_name'=>$last_name,
        ':email'=>$email
    ]);
    return $result;
}
?>