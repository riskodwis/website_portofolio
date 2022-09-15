<?php


//menghubungkan halaman index ke halaman function
require 'function.php';

// menampilkan seluruh data
$suhu = query("SELECT * FROM data_referensi ORDER BY id DESC LIMIT 1");
print_r($suhu)

?>
