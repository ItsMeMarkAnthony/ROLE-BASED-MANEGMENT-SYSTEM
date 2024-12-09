<?php
$host = 'localhost';
$username = 'root'; // default username for XAMPP
$password = ''; // default password for XAMPP (empty)
$dbname = 'school_db';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
