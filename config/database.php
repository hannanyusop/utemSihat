<?php
    session_start();
    $db = new mysqli('localhost', 'root', '1234', 'sihat');

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
?>