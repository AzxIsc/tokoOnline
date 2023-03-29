<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	// Proses mengirim email

	$message = "Pesan baru dari: $nama ($email)\n\n$pesan";
	mail("toko@example.com", "Pesan baru dari website", $message);

	// Tampilkan pesan sukses
	$success = true;
}
?>