<?php
include 'koneksi.php';
// Mendapatkan data dari form edit
$Id = $_POST['Id'];
$Judul = $_POST['Judul'];
$Penulis = $_POST['Penulis'];
$Penerbit = $_POST['Penerbit'];
$ISBN = $_POST['ISBN'];
$Tanggal_terbit = $_POST['Tanggal_terbit'];
$Sinopsis = $_POST['Sinopsis'];

// Update data buku
$sql = "UPDATE data_buku SET Judul='$Judul', Penulis='$Penulis', Penerbit='$Penerbit', ISBN='$ISBN', Tanggal_terbit='$Tanggal_terbit', Sinopsis='Sinopsis' WHERE Id='$Id'";
if ($conn->query($sql) === TRUE) {
    echo "Data buku berhasil diupdate.";
} else {
    echo "Error updating record: " . $conn->error;
}

?>