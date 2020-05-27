<?php

    require('config/helper.php');

    $email = '';

    $result = $db->query("SELECT * FROM users WHERE email='$email'");
    $user = $result->fetch_assoc();

    if($user) {
        return false;
    }else{
        return true;
    }



?>