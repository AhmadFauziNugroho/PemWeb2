<?php
require_once 'dbkoneksi.php';
$_delete=$_GET['delete'];
$sql="DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_delete]);

header('location:list_pelanggan.php');
?>