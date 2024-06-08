<?php
include 'koneksi.php';
// Mendapatkan Id buku yang akan dihapus dari URL
$Id = $_GET['Id'];

// Hapus data buku
$sql = "DELETE FROM data_buku WHERE Id='$Id'";
if ($conn->query($sql) === TRUE) {
    echo "Data buku berhasil dihapus.";
} else {
    echo "Error deleting record: " . $conn->error;
}
header('Location: index.php');
?>