<?php
	session_start();
	$v1=$_POST['nama'];
	$v2=$_POST['nim'];
	$v3=$_POST['kelas'];
	$output="Data Mahasiswa<br>NAMA : $v1 <br> NIM : $v2 <br> Kelas : $v3 ";
	echo "$output";
	$_SESSION['tugas3']=$output;
?>