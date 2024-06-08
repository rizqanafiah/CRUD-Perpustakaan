<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <br>
        <h2 class="text-center">Tambah Buku</h2>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-info text-light">
                        Form Input Data Buku
                    </div>
                    <div class="card-body">
                        <form action="proses_tambah.php" method="post">
                            <div class="form-group">
                                <label for="Judul">Judul Buku:</label>
                                <input type="text" class="form-control" id="Judul" name="Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="Penulis">Penulis:</label>
                                <input type="text" class="form-control" id="Penulis" name="Penulis" required>
                            </div>
                            <div class="form-group">
                                <label for="Penerbit">Penerbit:</label>
                                <input type="text" class="form-control" id="Penerbit" name="Penerbit" required>
                            </div>
                            <div class="form-group">
                                <label for="ISBN">ISBN:</label>
                                <input type="text" class="form-control" id="ISBN" name="ISBN" required>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal_terbit">Tanggal Terbit:</label>
                                <input type="text" class="form-control" id="Tanggal_terbit" name="Tanggal_terbit" required>
                            </div>
                            <div class="form-group">
                                <label for="Sinopsis">Sinopsis:</label>
                                <input type="text" class="form-control" id="Sinopsis" name="Sinopsis" required>
                            </div>
                            <div class="text-center">
                                <hr>
                                <button type="submit" class="btn btn-primary">Simpan</button>
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

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>