<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'CN&TKWEB';

$conn = mysqli_connect($host, $username, $password, $dbname);
if ($conn -> connect_error){
   die("Kết nối thất bại: " . $conn -> connect_error);
}
?>