    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php"><i class="fa fa-home"></i></a>
          <div id="navbar" class="nav-collapse collapse">
            <p class="navbar-text pull-right">
                <a href='#' class='navbar-link'>Login</a>
            </p>
            <ul class="nav navbar-nav navbar-left">
              <?php 
                  include "koneksi3.php";
              ?>
                    <li><a href="index.php?page=barang_tersedia"><?php echo "Barang Tersedia"; ?></a></li>
                    <li><a href="index.php?page=daftar_barang"><?php echo "Daftar Barang"; ?></a></li>
                    <li><a href="index.php?page=rekap"><?php echo "Rekap Pembelian"; ?></a></li>
                    <li><a href="index.php?page=keranjang"><?php echo "Keranjang"; ?></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>