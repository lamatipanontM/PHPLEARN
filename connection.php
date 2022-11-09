<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "options";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected succesfully";
    }
catch (PDOException $e)
    {

        echo "connection failed: ". $e ->getMessage();
    }
?>
