<html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>

<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " SELECT
                                            npm,
                                            nama,
                                            jk,
                                            prodi,
                                            nohp,
                                            alamat
                                      from
                                      mahasiswa 
                                      where npm = $_GET[id]");
    $row = mysqli_fetch_array ($data);

?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<p>
				<center>
					<h2>Aplikasi Crud Sederhana</h2>
					Oleh : <a href="#" target="_blank">Mr. Yul Hendra</a>
				</center>
			</p>
			<br>

                                    <form role="form" method="post" action="update.php">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="hidden" name="npm" value="<?php echo $row['npm'] ; ?>">
                                            <input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jk']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jk']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input class="form-control" name="prodi"  value="<?php echo $row['prodi'] ; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>NoHP</label>
                                            <input class="form-control" name="nohp"  value="<?php echo $row['nohp'] ; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>
		</div>
	</div>
	<p>
	<center>Copyright @ 2018 by : <a href="#" target="_blank">Mr.Yul Hendra</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>
