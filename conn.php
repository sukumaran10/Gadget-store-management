<?php

$conn = new mysqli('localhost', 'root', '', 'gadgetstoredb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>