<?php 
$koneksi = mysqli_connect("localhost","root","","spp");
 //mesinnya == root passwordnya = kosong nama dabasenya == spp2
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>