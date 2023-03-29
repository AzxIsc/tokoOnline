<?php require_once('component/kontakUs.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Kontak Kami</title>
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
	<link rel="stylesheet" type="text/css" href="../css/kontak.css">
	<?php include 'component/head.php'; ?><!-- BootStrap,dll... -->
</head>
<body>
    <!-- Header -->
	<?php include 'component/headerV2.php'; ?>

	<main>
		<section>
			<?php if (isset($success)) { ?>
				<p>Terima kasih telah mengirim pesan. Kami akan segera menghubungi Anda.</p>
			<?php } else { ?>
				<div class="body-form">
					<div class="contact-text">
						CONTACT<hr class="hr-1">
					</div>
					<div class="greetings">
						Kami sangat menghargai umpan balik dari pelanggan kami dan selalu terbuka untuk saran atau kritik yang dapat<br>
						membantu kami meningkatkan layanan kami.
					</div>
					<div class="geo-ic"><i class="bi bi-geo-alt-fill"></i></div>
					<div class="loc-it">
						IThings<br>
						Bukit Lama, Kec. Ilir Bar. I, Kota Palembang,<br>
						Sumatera Selatan 30128
					</div>
					<div class="telp-ic"><i class="bi bi-telephone"></i></div>
					<div class="no-telp">
						(021) 123-4567
					</div>
					<div class="mail-ic"><i class="bi bi-envelope"></i></div>
					<div class="gmail-it">
						ithings.company@google.com<hr class="hr-2">
					</div>

					<form class="formulir" action="../process/process_kontak.php" method="post">
						<div class="3-bag">
						<p>
							<input placeholder="Your Name" class="form-control" type="text" name="nama" id="nama" required>
						</p>
						<p>
							<input placeholder="Email" class="form-control" type="email" name="email" id="email" required>
						</p>
						<p>
							<textarea id="msg" placeholder="Message" class="form-control" name="pesan" id="pesan" required></textarea>
						</p>
						</div>
						<p>
							<input id="submit-btn" type="submit" class="btn btn-primary" value="Send" name="submit">
						</p>
					</form>
				</div>
			<?php } ?>
		</section>
	</main>
  <!-- Javascript -->
	<script src="js/nav.js"></script>

	<!-- Modal -->
	<?php include 'component/modal.php'; ?>

	<!-- Footer -->
	<?php include 'component/footer.php'; ?>
</body>
</html>