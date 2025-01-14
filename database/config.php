<?php


$hn = "localhost";
$un = "john_admin";
$pw = "EJ5OUi)OTJQ[QSwr";
$db = "music_jc";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
} else{
    echo 'Connection succssful';
}


?>