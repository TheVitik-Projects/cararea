<?php 
$id=$_GET['id'];
include("tools/db.php");
$mysql->query("DELETE FROM orders WHERE id='$id'");
header("Location: manager.php");
?>