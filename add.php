<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$npm = $_POST['npm'];
		$nama = $_POST['nama'];
		$tempat_lahir = $_POST['tempat_lahir'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$kode_pos = $_POST['kode_pos'];
		$sql = "INSERT INTO members (npm, nama, tempat_lahir, tanggal_lahir, alamat, kode_pos) VALUES ('$npm', '$nama', '$tempat_lahir''$tanggal_lahir', '$jenis_kelamin', '$alamat''$kode_pos')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>