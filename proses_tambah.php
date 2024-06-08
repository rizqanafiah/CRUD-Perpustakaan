<?php
// Konfigurasi database
include 'koneksi.php';

// Mendapatkan data dari form tambah
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$ISBN = $_POST['ISBN'];
$Tanggal_terbit = $_POST['Tanggal_terbit'];
$Sinopsis = $_POST['Sinopsis'];

// Menambah data buku ke dalam database
$sql = "INSERT INTO data_buku ( Judul, Penulis, Penerbit, ISBN, Tanggal_terbit, Sinopsis) VALUES ( '$Judul', '$Penulis', '$Penerbit', '$ISBN', '$Tanggal_terbit', '$Sinopsis')";
if ($conn->query($sql) === TRUE) {
    echo "Data buku berhasil ditambahkan.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
?>