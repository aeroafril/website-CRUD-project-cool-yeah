<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT SAYA</title>
    <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style type="text/css"></style>
</head>
<body>
    <div class="col-md-8 col-md-offset-2">
        <br><br>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="alert alert-warning">
                    <a href="index-Copy.php" class="btn btn-danger">
                        <i class="glyphicon glyphicon-plus"></i>
                        LOGIN
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <div class="container">
                    <h2 align="center">Card Dinamis dari Database PHP</h2>
                    <div class="row" id="load_data">
                        <?php
                            include 'koneksi.php';
                            $query = "SELECT * FROM m_siswa ORDER BY id ASC";
                            $dewan1 = $koneksi->prepare($query);
                            $dewan1->execute();
                            $res1 = $dewan1->get_result();
                            while($row = $res1->fetch_assoc()){
                                $id = $row["id"];
                                $photo = $row["photo"];
                                $nim = $row["nim"];
                                $nama = $row["nama"];
                                $jurusan = $row["jurusan"];
                                $angkatan = $row["angkatan"];
                        ?>
                        <div class="card-deck">
                            <div class="card" style="width: 250px;">
                                <img src="img/<?php echo $row['photo']; ?>" class="card-img-top" alt="gambar">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $nama; ?></h5>
                                    <p class="card-text"><?php echo $nim; ?></p>
                                    <p class="card-text"><?php echo $jurusan; ?></p>
                                    <a href="#" class="btn btn-primary">Selanjutnya</a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Angkatan <?php echo $angkatan; ?></small>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function (){
            $('#dataTables-example').dataTable();
        });
    </script>

</body>
</html>