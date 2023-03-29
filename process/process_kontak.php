<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$pesan = $_POST['pesan'];

	// Proses mengirim email

	$message = "Pesan baru dari: $nama ($email)\n\n$pesan";
	if(mail("ithings.company@gmail.com", "Pesan baru dari website", $message)) {
		echo "<script>alert('Pesan telah terkirim. Terima kasih telah menghubungi kami.')</script>";
		echo "<script>window.location.href='../application/kontak.php'</script>";
		exit();
	} else {
		echo "<script>alert('Pesan gagal dikirim karena belum dihosting, tapi terimakasih sudah mengirim pesan.')</script>";
		echo "<script>window.location.href='../application/kontak.php'</script>";
		exit();
	}
}
?>
