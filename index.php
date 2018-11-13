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
					Oleh : <a href="#" target="_blank">Mr. Yul Hendra</a>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-primary" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						NPM
					</th>
					<th>
						Nama
					</th>
					<th>
						Jenis Kelamin
					</th>
					<th>
						Prodi
					</th>
					<th>
						NoHP
					</th>
					<th>
						Alamat
					</th>
					<th>
						Opsi
					</th>
				</tr>
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
														  order by npm ASC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $row['npm']; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['jk']; ?>
					</td>
					<td>
						<?php echo $row['prodi']; ?>
					</td>
					<td>
						<?php echo $row['nohp']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row['npm']; ?>">Detail</a> |
						<a href="edit.php?id=<?php echo $row['npm']; ?>">Edit</a> |
						<a href="hapus.php?id=<?php echo $row['npm']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	<p>
	<center>Copyright @ 2018 by : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">Mr. Yul Hendra</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>
