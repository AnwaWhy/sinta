<?php
include './koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    hapusGebetan($id);
    header("Location: index.php");
}
?>
