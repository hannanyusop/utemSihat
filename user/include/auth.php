<?php

    include_once ('../config/helper.php');

    include_once ('../config/database.php');

    if(isset($_SESSION['auth'])){

        $user_id = $_SESSION['auth']['user_id'];

        $result = $db->query("SELECT * FROM users WHERE id=$user_id");
        $user = $result->fetch_assoc();

        $user_name = $user['full_name'];
        $user_email = $user['email'];
        $user_is_admin = $user['is_admin'];

    }else{

//        echo "<script>alert('Session ended! Please relogin.');window.location='../../login.php'</script>";

    }
?>