<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <br>
        <h2 class="text-center">Edit Buku</h2>
        <?php
        include 'koneksi.php';

        // Mendapatkan NIM mahasiswa yang akan diedit dari URL
        $Id = $_GET['Id'];

        // Mengambil data mahasiswa dari database berdasarkan NIM
        $sql = "SELECT * FROM data_buku WHERE Id='$Id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        Form Input Data Buku
                    </div>
                    <div class="card-body">
                        <form action="proses_edit.php" method="post">
                            <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                            <div class="form-group">
                                <label for="Judul">Judul:</label>
                                <input type="text" class="form-control" id="Judul" name="Judul" value="<?php echo $row['Judul']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Penulis">Penulis:</label>
                                <input type="text" class="form-control" id="Penulis" name="Penulis" value="<?php echo $row['Penulis']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Penerbit">Penerbit:</label>
                                <input type="text" class="form-control" id="Penerbit" name="Penerbit" value="<?php echo $row['Penerbit']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="ISBN">ISBN:</label>
                                <input type="text" class="form-control" id="ISBN" name="ISBN" value="<?php echo $row['ISBN']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="Sinopsis">Sinopsis:</label>
                                <input type="text" class="form-control" id="Sinopsis" name="Sinopsis" value="<?php echo $row['Sinopsis']; ?>" required>
                            </div>
                            <div class="text-center">
                                <hr>
                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                <button type="reset" class="btn btn-danger">Kosongkan</button>
                            </div>
                        </form>
                        </div>
                    <div class="card-footer bg-info">
                        
                    </div>
                </div>
                <br>
            </div>
        </div>
        <?php
        } else {
            echo "Data buku tidak ditemukan.";
        }

        ?>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>