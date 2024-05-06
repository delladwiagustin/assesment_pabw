<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "published_books");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Periksa apakah parameter ID telah diterima
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data berdasarkan ID
    $query = "DELETE FROM terbit WHERE id = $id";
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah penghapusan berhasil
    if ($result) {
        echo "Data berhasil dihapus";
    } else {
        echo "Gagal menghapus data";
    }
} else {
    echo "ID tidak diterima";
}

// Tutup koneksi
mysqli_close($koneksi);
?>
