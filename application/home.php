<?php include 'component/nextBackImg.php';?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Welcome to IThings</title>
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
  <?php include 'component/head.php'; ?><!-- BootStrap,dll... -->
</head>
<body>
            <!-- Header -->
  <?php include 'component/header.php'; ?>

  <div>
    <h2 class="home-text">TEMUKAN<br> PRODUK<br> FAVORIT MU!</h2>
  </div>

  <div class="nextPrev">
    <div>
      <?php
        $id_produk = 1; // nilai default
        if (isset($_GET['id_produk'])) {
          $id_produk = $_GET['id_produk'];
        }
        $query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = $id_produk");
        $produk = mysqli_fetch_assoc($query);
      ?>
      <div class="imgNP">
      <a href="?id_produk=<?php echo min(1, $produk['id_produk'] -0); ?>" class="prev"><i class="bi bi-arrow-left-circle-fill"></i></a>
      <img class="res-img" src="../img/gambar_produk/<?php echo $produk["id_produk"]; ?>.png" alt="<?php echo $produk["nama_produk"]; ?>">
      <a href="?id_produk=<?php echo max(1, $produk['id_produk'] + 1);  ?>" class="next"><i class="bi bi-arrow-right-circle-fill"></i></a>
      <p class="txtImg"><?php echo $produk["nama_produk"]; ?></p>
      </div>
    </div>
  </div>

  <div class="produk-pict">
  <a class="btn-it"><button type="button" class="btn btn-primary" onclick="location.href='produk.php'">Selengkapnya...</button></a>
  </div>
              <!-- Javascript -->
  <script src="js/nav.js">
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex-1].style.display = "block";
    }
  </script>

            <!-- Modal -->
  <?php include 'component/modal.php'; ?>

              <!-- Footer -->
  <?php include 'component/footer.php'; ?>
</body>
</html>