
    <?php
  include_once('../DB/config.php');
  include_once('../Model/register.php');
  

    function createUser($conn, $userArr){
        $stmt = $conn->prepare(
            "insert into users(first_name,last_name,email,password) 
            values(
                    :first_name, 
                    :last_name, 
                    :email, 
                    :password
                )"
        );
        $result = $stmt->execute([
            ':first_name' => $userArr['first_name'],// placeholder and values
            ':last_name' => $userArr['last_name'],
            ':email' => $userArr['email'],
            ':password' => md5($userArr['password']),
        ]);
        if( $result ){
            return true;
        }
        return false;
    }

    function userEmail($conn, $email){
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email");
        $stmt->execute([':email'=>$email]);
        $result = $stmt->rowCount();
        if($result > 0){
            return true;
        }else{
            return false;
        }
    }
   