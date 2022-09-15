<?php


//menghubungkan halaman index ke halaman function
require 'function.php';

// menampilkan seluruh data
$suhu = query("SELECT * FROM data_referensi");


//tombol cari ditekan
// if(isset($_POST["cari"]) ){
// 	$uang = cari($_POST["keyword"]);
// }

// ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data DHT11</title>
	<linke rel="stylesheet" href="style3.css">
</head>
<style>
a, button,input[type=submit],input[type=reset] {
    font-family: sans-serif;
    font-size: 12px;
    background: #22a4cf;
    color: white;
    border: white 3px solid;
    border-radius: 5px;
    padding: 7px 20px;
    margin-top: 10px;
}
a {
    text-decoration: none;
}
a:hover, button:hover, input[type=submit]:hover, input[type=reset]:hover{
    opacity:0.9;
}
body{
    height: 100vh;
    background-image: url(18963134.jpg);
    background-size: cover;
    background-position: fixed;
    background-repeat: no-repeat;
}
table{
    border-spacing: 15px;
}
</style>
<body >

	<h1 align="center">Data Sensor Suhu DHT11</h1>

	<a href="tambah.php">Tambah</a>
	<br>
	<br>

<!-- <form action="" method="post">

	<input type="text" name="keyword" size="50" autofocus
	placeholder="Silakan cari disini..." autocomplete="off">
	<button type="submit" name="cari">Cari</button>
	
</form> -->

<br>
	<table border="1" cellpadding="10" cellspacing="0"l>
		
		<tr>
			<th>No</th>
			<th>Suhu</th>
			<th>Operasi</th>
		</tr>

		<?php $i = 1;  ?>

		<!--pengulangan array $data ke $row-->
		<?php foreach ($suhu as $row) : ?>
		<tr>
			<td><?= $i;  ?></td>
			<td><?= $row["suhu"]; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>">Hapus</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

	</table>
</body>
</html>