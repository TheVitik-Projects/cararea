<?php
$host="localhost"; 
$user="root"; 
$pass=""; 
$db="cararea"; 
$mysql = new mysqli($host,$user,$pass,$db);
if ($mysql->connect_error) {
    die("Помилка сервера, спробуйте пізніше.");
}
?>