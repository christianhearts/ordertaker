<?php

$conn = new mysqli('localhost', 'breadman', 'breadman', 'BreadmanDB');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
