<?php

require_once 'config/helper.php';

if(isset($_POST['email']) && isset($_POST['password'])){

    $email = $_POST['email']; $password = $_POST['password'];

    $result = $db->query("SELECT * FROM users WHERE email='$email'");
    $user = $result->fetch_assoc();

    if($user){

        #check password hashing
        if (password_verify($password, $user['password'])) {


            $_SESSION['auth'] = [
                'user_id' => (int)$user['id'],
                'is_admin' => (int)$user['is_admin'],
                'full_name' => $user['full_name'],
            ];

            header('Location:user/dashboard.php');

        }else{
            echo "<script>alert('Invalid Password!');window.location='login.php'</script>";
        }

    }

    echo "<script>alert('Invalid Email!');window.location='login.php'</script>";


}else{
    header('Location:login.php');
}
?>