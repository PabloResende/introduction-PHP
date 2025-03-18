<?php

$host = "localhost";
$user = "root";
$pass = ""; 
$banco = "banco";   

$mysqli = new mysqli($host, $user, $pass, $banco);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}