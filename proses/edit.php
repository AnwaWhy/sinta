<?php
include '../koneksi/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $zodiak = $_POST['zodiak'];
    $hobi = $_POST['hobi'];
    editGebetan($id, $nama, $zodiak, $hobi);
    header("Location: /sinta/index.php");
}
?>
