<?php
include '../koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $zodiak = $_POST['zodiak'];
    $hobi = $_POST['hobi'];
    tambahGebetan($nama, $zodiak, $hobi);
    header("Location: /sinta/index.php");
}
?>
