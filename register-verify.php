<?php

require_once 'config/helper.php';

if(isset($_POST['register'])){

    #check if email is unique
    if(isset($_POST['email'])){

        $email = $_POST['email'];
        #check if mail is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Ops! invalid email!');window.location='register.php '</script>";
            exit();
        }

        $user_q = $db->query("SELECT * FROM users WHERE email='$email'");
        $job = $user_q->fetch_assoc();


        if($job){
            echo "<script>alert('Email already exist!');window.location='register.php'</script>";
        }
    }

    $fullname = strtoupper($_POST['name']);
    $password = $_POST['password'];
    $hash_pass = password_hash($password, PASSWORD_BCRYPT);
    if (!$db->query("INSERT INTO users ('email','password', 'full_name', 'is_admin') VALUES ('$email', '$hash_pass', '$fullname', '0')")) {
        echo "Error: Inserting user data." . $db->error; exit();
    }else{

        echo "<script>alert('Your account successfully registered!');window.location='login.php '</script>";
    }

}

?>