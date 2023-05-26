<?php
require_once '../../database/dbkoneksi.php';
$_delete=$_GET['delete'];
$sql="DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_delete]);

header('location:../../pages/pelanggan/list_pelanggan.php');
?>