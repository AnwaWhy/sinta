<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "db_sinta");

// Fungsi untuk menambahkan gebetan baru
function tambahGebetan($nama, $zodiak, $hobi) {
    global $koneksi;
    $query = "INSERT INTO gebetan (nama_gebetan, zodiak, hobi) VALUES ('$nama', '$zodiak', '$hobi')";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mengambil semua data gebetan
function semuaGebetan() {
    global $koneksi;
    $query = "SELECT * FROM gebetan";
    $result = mysqli_query($koneksi, $query);
    return $result;
}

// Fungsi untuk menghapus gebetan berdasarkan ID
function hapusGebetan($id) {
    global $koneksi;
    $query = "DELETE FROM gebetan WHERE id_gebetan=$id";
    mysqli_query($koneksi, $query);
}

// Fungsi untuk mendapatkan detail gebetan berdasarkan ID
function detailGebetan($id) {
    global $koneksi;
    $query = "SELECT * FROM gebetan WHERE id_gebetan=$id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

// Fungsi untuk mengedit data gebetan
function editGebetan($id, $nama, $zodiak, $hobi) {
    global $koneksi;
    $query = "UPDATE gebetan SET nama_gebetan='$nama', zodiak='$zodiak', hobi='$hobi' WHERE id_gebetan=$id";
    mysqli_query($koneksi, $query);
}
?>
