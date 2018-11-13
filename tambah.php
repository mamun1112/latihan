<html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>

<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Aplikasi Crud Sederhana</h2>
					Oleh : <a href="#" target="_blank">Mr.Yul Hendra</a>
				</center>
			</p>
			<br>
			
                                    <form role="form" method="post" action="input.php">
                                        <div class="form-group">
                                            <label>NPM</label>
                                            <input class="form-control" name="npm">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" checked>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input class="form-control" name="prodi">
                                        </div>
                                        <div class="form-group">
                                            <label>NoHP</label>
                                            <input class="form-control" name="nohp">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3"></textarea>
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