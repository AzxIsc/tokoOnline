<header>
    <div class="container-it">
      <nav>
        
      <div class="offcanvas">
        <div class="offcanvas-content">
        <button id="profile-back-btn" type="button" class="btn btn-outline-light"><i  class="bi bi-caret-left-fill"></i></button>
          <ul>
          <a id="profile-pict"><i class="bi bi-person-circle"></i></a>
          </ul>

          <ul style="margin-left:60px">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#logoutacc">
            Log Out
          </button>
          </ul>

          <ul>
          <li style="margin-top: 50px">
          <a id="prf-btn" href="#" style="padding-right: 75px;"><i class="bi bi-person-circle"></i> My Profile</a>
          </li>
          </ul>

          <ul>
          <li style="margin-top: 20px">
          <a id="prf-btn" href="#" style="padding-right: 30px;"><i class="bi bi-gear-fill"></i> Account Settings</a>
          </li>
          </ul>

          <ul>
          <li style="margin-top: 20px">
          <a id="prf-btn" href="#" style="padding-right: 82px;"><i class="bi bi-cash"></i> Purchase</a>
          </li>
          </ul>

          <ul>
          <li style="margin-top: 20px">
          <a id="prf-btn" href="#" style="padding-right: 7px;"><i class="bi bi-bell-fill"></i> Notification Settings</a>
          </li>
          </ul>
        </div>
      </div>

      <a id="profile-icon"><i class="fas fa-user-circle"></i></a>

      <form class="search-bar" action="../process/process_search.php" method="get">
        <input type="search" class="form-control" name="search" placeholder="Search...">
        <button id="search-bar-ic" type="submit" class="btn btn-primary">
          <i class="fas fa-search"></i>
        </button>
      </form>


      <h1 class="web-name">
        IThings
      </h1>

        <ul id="nav-btn-it" class="nav-btn-it">
          <li><button type="button" class="btn btn-light" onclick="location.href='home.php'">Home</button></li>
          <li><button type="button" class="btn btn-light" onclick="location.href='#'">About Us</button></li>
          <li><button type="button" class="btn btn-light" onclick="location.href='kontak.php'">Contact</button></li>
        </ul>

        <div class="offcanvasCart">
        <div class="offcanvasCart-content">
        <button id="cart-back-btn" type="button" class="btn btn-danger"><i  class="bi bi-x"></i></button>
        <h2 class="cart-text"><i class="bi bi-cart"></i> Keranjang</h2>


        <div class="cart-body" style="color: black">
        
        <table>
          <thead>
            <tr>
              <th>Nama Produk</th>
              <th>Harga</th>
              <th>Jumlah</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Ambil data dari session keranjang
            $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

            // Jika keranjang tidak kosong, tampilkan produk yang ada di dalamnya
            if (!empty($cart)) {
              foreach ($cart as $id_produk => $item) {
                ?>
                <tr>
                  <td><?php echo $item['nama_produk']; ?></td>
                  <td><?php echo $item['harga_produk']; ?></td>
                  <td><?php echo $item['jumlah']; ?></td>
                  <td><?php echo $item['harga_produk'] * $item['jumlah']; ?></td>
                </tr>
                <?php
              }
            } else {
              ?>
              <tr>
                <td colspan="4">Keranjang kosong</td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
        </div>

        </div>
      </div>

        <ul>
        <button id="cart-icon" type="button" class="btn btn-light">
          <span class="bi bi-cart" aria-hidden="true"></span>
        </button>
        </ul>
      </nav>
    </div>
</header>
