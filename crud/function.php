<?php 

// koneksi ke database

$konek = mysqli_connect("localhost", "root", "", "db_iotproject");
 
// menerima parameter query
function query($query){
	global $konek;
	//penyimpanan
	$result = mysqli_query($konek, $query);
	//untuk penyimpanan
	$rows = [];
	//looping
	while ( $row = mysqli_fetch_assoc($result)) {
		//menambahkan elemen baru tiap array
		$rows[] = $row;
	}
	return $rows;
}


// logika penambahan
function tambah($data){
	global $konek;

	//tidak menggunakan $_POST karena dikirim ke function dan ditangkap oleh $dataS
	$suhu = htmlspecialchars($data["suhu"]);

	//query insert data
	$query = "INSERT INTO data_referensi
	VALUES
	('','$suhu') ";
	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}

function hapus($id) {
	global $konek;
	mysqli_query($konek, "DELETE FROM data_referensi WHERE id = $id");

	return mysqli_affected_rows($konek);
}

// logika ubah
function ubah($data){
	global $konek;

	//tidak menggunakan $_POST karena dikirim ke function dan ditangkap oleh $data
	$id = $data["id"];
	$suhu = htmlspecialchars($data["suhu"]);


	//query insert data
	$query = "UPDATE data_referensi SET suhu = '$suhu' WHERE id = $id";

	mysqli_query($konek, $query);

	return mysqli_affected_rows($konek);
}


// logika pencarian
// function cari($keyword){
// 	$query = "SELECT * FROM data_referensi
// 			WHERE
// 			hari LIKE '%$keyword%' OR
// 			tanggal LIKE '%$keyword%' OR
// 			uang_masuk LIKE '%$keyword%' OR
// 			uang_keluar LIKE '%$keyword%' OR
// 			keterangan LIKE '%$keyword%'
// 			";

// 	return query($query);
// }

function register($data){
	global $konek;

	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($konek, $data["password"]);
	$password2 = mysqli_real_escape_string($konek, $data["password2"]);

	// cek username ada atau tidak
	$result = mysqli_query($konek, "SELECT username FROM admin WHERE username = '$username'");

	if(mysqli_fetch_assoc($result)){
		echo "<script>
			alert('Username sudah digunakan!')
				</script>";

			return false;
	}


 	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
		alert('Konfirmasi password tidak sesuai!');
		</script>";

		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user baru ke database
	mysqli_query($konek, "INSERT INTO admin VALUES('', '$username', '$password')");

	return mysqli_affected_rows($konek);


}

?>