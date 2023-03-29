<!DOCTYPE html>
<html>
<head>
    <title>Produk 1</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <h1>Toko Online</h1>
      <nav>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="produk.php">Produk</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <table style="width:50% ; margin:0 auto; margin-top:150px">
    <tr>
      <th colspan="2">Detail Produk</th>
    </tr>
    <tr>
      <td>Nama Produk</td>
      <td><?php echo $product['name']; ?></td>
    </tr>
    <tr>
      <td>Deskripsi Produk</td>
      <td><?php echo $product['description']; ?></td>
    </tr>
    <tr>
      <td>Harga</td>
      <td><?php echo $product['price']; ?></td>
    </tr>
    <tr>
      <td colspan="2">
        <form action="beli.php" method="post" style="padding-left:600px">
          <input type="hidden" name="id" value="<?php echo $product['produk1']; ?>">
          <input type="submit" value="beli sekarang">
        </form>
      </td>
    </tr>
  </table>
  <footer>
    <div class="container">
      <p>Copyright &copy; 2023 Byner</p>
    </div>
  </footer>
</body>
</html>
