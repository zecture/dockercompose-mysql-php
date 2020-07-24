<?php

// "database", "root", "tiger", null
// Skapar uppkoppling till DB
function create_conn() {
    $servername = "database";
    $username = "root";
    $password = "tiger";
    $dbname = "dating";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf-8');
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error); } 
    return $conn;
}

// Förhindrar SQL Injection
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>