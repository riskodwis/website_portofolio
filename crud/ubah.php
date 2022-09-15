<?php

// koneksi ke file function.php
require 'function.php';

// ambil data diurl

$id = $_GET["id"];


// query data keuangan berdasarkan id
$temp = query("SELECT * FROM data_referensi WHERE id = $id")[0];



// apakah tombol submit sudah di tekan atau belum
if (isset($_POST["submit"]) ){

    
    //cek apakah data berhasil di tambah atau tidak
    if(ubah($_POST) > 0){ // mengubah data yang ada di file funtion.php
        echo "<script>
                alert('Data Berhasil Diubah!')
                document.location.href = 'index.php'
                </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!')
                document.location.href = 'index.php'
                </script>";
    }

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<h1>Ubah Data Suhu</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $temp["id"]; ?>">
		<table>
			<tr>
				<td><label for="suhu">suhu </label></td>
				<td>:</td>
				<td><input type="suhu" name="suhu" id="suhu" required value="<?= $temp["suhu"]; ?>"></td>
			</tr>
				<td><button type="submit" name="submit">Ubah Data</button></td>
			</tr>
		</table>
		
	</form>

</body>
</html>