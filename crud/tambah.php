<?php

// koneksi ke file function.php
require 'function.php';

// apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ){

    
    //cek apakah data berhasil di tambah atau tidak
    if(tambah($_POST) > 0){ // tambah() adalah fungsi untuk menambahkan data yang ada di file funtion.php
        echo "<script>
                alert('Data Berhasil Ditambahkan!')
                document.location.href = 'index.php'
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!')
                document.location.href = 'index.php'
                </script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="style2.css">	
</head>
<body>
	<h1>Tambah Data Suhu</h1><br>
<div>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="suhu">Suhu </label></td>
				<td>:</td>
				<td><input type="suhu" name="suhu" id="suhu" required autofocus></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit">Tambah Data</button></td>
			</tr>
		</table>
		
	</form>
</div>
</body>
</html>