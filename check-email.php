<?php

    require('config/helper.php');

//    $email = $_POST['email'];
//
//    $result = $db->query("SELECT * FROM users WHERE email='$email'");
//    $user = $result->fetch_assoc();
//
//    if($user) {
//        $isAvailable = false; // or false
//    }else{
//        $isAvailable = true; // or false
//    }


    // Finally, return a JSON
    echo json_encode(array(
        'valid' => true,
    ));


?>