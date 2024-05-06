<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "published_books");

// Periksa koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Query untuk mengambil data dari tabel
$query = "SELECT * FROM terbit";
$result = mysqli_query($koneksi, $query);

// Inisialisasi array untuk menyimpan data
$data = array();

// Loop melalui hasil query dan tambahkan ke array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Tutup koneksi
mysqli_close($koneksi);

// Mengembalikan data dalam format JSON
echo json_encode($data);
?>
