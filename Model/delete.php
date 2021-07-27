<?php
include_once('../DB/config.php');
// function getUserByID($conn,$id,){
//     $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
//     $stmt->execute([
//         ':id' =>$id
//     ]);
//     $result = $stmt->fetch();
//     return $result;
// }
function deleteuser($conn,$id){
    $stmt = $conn->prepare("DELETE FROM users WHERE id=:id");
    $result = $stmt->execute([
        'id' => $id
    ]);
   
}
?>
