<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "talents_db";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>