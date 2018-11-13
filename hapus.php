<?php
include"koneksi.php";


$query = "DELETE FROM mahasiswa 
							WHERE npm ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

