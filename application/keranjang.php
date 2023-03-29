<?php
session_start();
require_once('component/config.php');

// Jika tombol hapus di klik
if (isset($_GET['hapus'])) {
  $id = $_GET['hapus'];

  // Hapus item dari id_keranjang
  if (isset($_SESSION['id_keranjang'][$id])) {
    unset($_SESSION['id_keranjang'][$id]);
    echo "<script>alert('Item dihapus dari id_keranjang!');</script>";
    echo "<script>window.location='id_keranjang.php';</script>";
  }
}

// Jika tombol update di klik
if (isset($_POST['update'])) {
  $jumlah_produk = $_POST['jumlah_produk'];
  $id = $_POST['id_produk'];

  // Update jumlah_produk item di id_keranjang
  if (isset($_SESSION['id_keranjang'][$id])) {
    $_SESSION['id_keranjang'][$id]['jumlah_produk'] = $jumlah_produk;
    echo "<script>alert('id_Keranjang berhasil diupdate!');</script>";
    echo "<script>window.location='id_keranjang.php';</script>";
  }
}

// Jika id_keranjang kosong
if (empty($_SESSION['id_keranjang'])) {
  echo "<h1>Sabar ya adik adik, keranjang IThings masih dalam tahap pengembangan!</h1>";
} else {
  ?>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah_produk</th>
        <th>Subtotal</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $total = 0;
      foreach ($_SESSION['id_keranjang'] as $id_produk => $item) {
        $nama_produk = $item['nama_produk'];
        $harga = $item['harga'];
        $jumlah_produk = $item['jumlah_produk'];
        $subtotal = $harga * $jumlah_produk;
        $total += $subtotal;
        ?>
        <tr>
          <td><?php echo $nama_produk; ?></td>
          <td><?php echo "Rp " . number_format($harga); ?></td>
          <td>
            <form method="post" action="cartItem">
              <div class="input-group">
                <input type="number" name="jumlah_produk" value="<?php echo $jumlah_produk; ?>" class="form-control">
                <input type="hidden" name="id_produk" value="<?php echo $id_produk; ?>">
                <div class="input-group-append">
                  <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
              </div>
            </form>
          </td>
          <td><?php echo "Rp " . number_format($subtotal); ?></td>
          <td><a href="id_keranjang.php?hapus=<?php echo $id_produk; ?>" class="btn btn-danger">Hapus</a></td>
        </tr>
      <?php } ?>
      <tr>
        <td colspan="3" align="right">Total:</td>
        <td><?php echo "Rp " . number_format($total); ?></td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <a href="checkout.php" class="btn btn-success">Checkout</a>
<?php } ?>