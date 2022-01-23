<?php 
$id=$_GET['id'];
include("tools/db.php");
$mysql->query("UPDATE orders SET status=2 WHERE id='$id'");
header("Location: manager.php");
?>