<?php
include"koneksi.php";



$id = $_POST['npm'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$prodi = $_POST['prodi'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];




$query = "UPDATE mahasiswa SET
								nama = '$nama',
								jk= '$jenis_kelamin',
								prodi= '$prodi',
								nohp = '$nohp',
								alamat = '$alamat'
								WHERE npm = '$id'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>
