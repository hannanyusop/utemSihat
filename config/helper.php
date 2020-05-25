<?php

require ("database.php");

$GLOBALS['APP_NAME'] = "UTEM SIHAT";
$GLOBALS['APP_DESC'] = "";

function getAge($bod = '01-01-1990')
{

    $date = new DateTime($bod);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;

}

?>