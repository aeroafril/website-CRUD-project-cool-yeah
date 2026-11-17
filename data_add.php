<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT SAYA</title>
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
        <br><br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="alert alert-warning">
                    <a href="index.php" class="btn btn-danger">
                        <i class="glyphicon glyphicon-file">
                            Lihat Data
                        </i>
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <form action="data_add_s.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" placeholder="Ini contoh input text dengan placeholder" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" required>
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" class="form-control" name="photo" required>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Simpan</button>
                    <button type="reset" class="btn btn-default"><i class="fa fa-file-text"></i>Bersih</button>
                </form>
            </div>
        </div>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
        $(document)ready(function (){
            $('#dataTables-example').dataTable();
        })
    </script>
</body>
</html>