<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Data Buku</h2>
        <?php
            $username = $_SESSION['username'];
            echo $username;
        ?><br>
        <form action="logout.php" method="post">
            <button type="submit" class="btn btn-danger mb-3 name="logout">Logout</button>
        </form><br>
        <a class="btn btn-success mb-3" href="tambah.php">Tambah Buku</a>
        <div class="card mt-3">
            <div class="card-header bg-info text-light">
                Data Buku
            </div>
            <div class="card-body">
                <div class="col-md-6 mx-auto">
                    <form method="POST">
                        <div class="input-group mb-3">
                            <input type="text" name="tcari" class="form-control" placeholder="Masukkan kata kunci!">
                            <button class="btn btn-primary" name="bcari" type="submit">Cari</button>
                            <button class="btn btn-danger" name="breset" type="reset">Reset</button>
                        </div>
                    </form>
                </div>

                

                <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id Buku</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>ISBN</th>
                            <th>Tanggal Terbit</th>
                            <th>Sinopsis</th>
                            <th>Aksi</th>
                        </tr>

                        <tr>
                            <?php 
                                include 'koneksi.php';
                                // Mendapatkan data mahasiswa dari database
                                $sql = "SELECT * FROM data_buku";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    $data_buku = $result;
                                    foreach ($data_buku as $data_buku) {
                                        echo "<tr>";
                                            echo "<td>".$data_buku['Id']."</td>";
                                            echo "<td>".$data_buku['Judul']."</td>";
                                            echo "<td>".$data_buku['Penulis']."</td>";
                                            echo "<td>".$data_buku['Penerbit']."</td>";
                                            echo "<td>".$data_buku['ISBN']."</td>";
                                            echo "<td>".$data_buku['Tanggal_terbit']."</td>";
                                            echo "<td>".$data_buku['Sinopsis']."</td>";
                                            echo "<td>";
                                                    echo "<a class='btn btn-warning' href='edit.php?Id=".$data_buku['Id']."'>Edit</a> ";
                                                    echo "<a class='btn btn-danger' href='proses_hapus.php?Id=".$data_buku['Id']."'>Hapus</a>";
                                            echo "</td>";
                                            echo "</tr>";
                            }
                                } else {
                                    echo "0 results";
                                }

                            ?>
                        </tr>
                </table>
            </div>
            <div class="card-footer bg-info">
                    
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>