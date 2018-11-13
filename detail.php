<html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>


<?php
	include"koneksi.php";

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
					Oleh : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">Rully Studio</a>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-success" href="index.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Telepon
					</td>
					<td>
						: <?php echo $row['jk']; ?>
					</td>
				</tr>
				<tr>
					<td>
						Alamat
					</td>
					<td>
						: <?php echo $row['alamat']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<p>
	<center>Copyright @ 2018 by : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">Mr. Yul Hendra</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>
