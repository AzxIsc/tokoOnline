<?php include 'component/getProduk.php';?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $produk["nama_produk"]; ?></title>
	<link rel="stylesheet" type="text/css" href="../css/produk.css">
	<link rel="stylesheet" type="text/css" href="../css/nav.css">
  	<?php include 'component/head.php'; ?><!-- BootStrap,dll... -->

</head>
<body>
    <!-- Header -->
	<?php include 'component/header.php'; ?>

	<div>
		<div class="produk-img">
			<img class="res-img" src="../img/gambar_produk/<?php echo $produk["id_produk"]; ?>.png" alt="<?php echo $produk["nama_produk"]; ?>">
			<p><?php echo $produk["nama_produk"]; ?><p>
		</div>


		<div class="produk-info">
			<h1><?php echo $produk["nama_produk"]; ?></h1><br><br>
			<p>Kategori: <?php echo $produk["kategori"]; ?></p>
			<p>Stok: <?php echo $produk["stok_produk"]; ?></p>
			<p>Harga: Rp.<?php echo number_format($produk["harga"], 0, ',', '.'); ?>

				<!-- Tombol "Masukkan ke Keranjang" -->
				<form class="cart-btn-it" method="post" action="../process/process_keranjang.php">
					<input type="hidden" name="id_produk" value="<?php echo $produk['id_produk']; ?>">
					<input type="hidden" name="nama_produk" value="<?php echo $produk['nama_produk']; ?>">
					<input type="hidden" name="harga" value="<?php echo $produk['harga']; ?>">
					<input type="hidden" name="jumlah" value="1">
					<button type="submit" class="btn btn-primary">Masukkan ke Keranjang</button>
				</form>

		</div>

	</div>
	<!-- Javascript -->
	<script src="js/nav.js"></script>

	<!-- Modal -->
	<?php include 'component/modal.php'; ?>

	<!-- Footer -->
	<?php include 'component/footer.php'; ?>
</body>
</html>