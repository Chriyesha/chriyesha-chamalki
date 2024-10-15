<?php
$host = "sql207.infinityfree.com";
$username = "if0_37494497";
$password = "6fAFgrK7LoLkr";
$dbname = "if0_37494497_rreducation"; 


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
