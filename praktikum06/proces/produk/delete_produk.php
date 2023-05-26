<?php
require_once '../../database/dbkoneksi.php';
$_delete=$_GET['delete'];
$sql="DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_delete]);

header('location:../../pages/produk/list_produk.php');
?>