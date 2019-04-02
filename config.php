<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulsedb";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
    die("Cannot connect to db");
}

//