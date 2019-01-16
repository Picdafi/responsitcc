<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tugas Cloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
 
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/datepicker.css">
    
    <!-- fortawasome -->
    <link href="fa44/css/font-awesome.css" rel="stylesheet">
    
  </head>

  <body>
  <div id="tombol">
    <?php 
      //menambah header
      include "header_sim.php";
    ?>
  </div>
    
    
    <div class="container-fluid">
      <div class="row-fluid">
          <?php   
            if (@$_GET["page"]=="") {
                include "depan.php";
            } elseif($_GET["page"]=="barang_tersedia") {
                include "barang_tersedia.php";
            } elseif($_GET["page"]=="daftar_barang") {
                include "barang_tampil.php";
            } elseif($_GET["page"]=="tambah_barang") {
                include "barang_isi.php";
            } elseif($_GET["page"]=="proses") {
                include "barang_simpan.php";
            } elseif($_GET["page"]=="keranjang") {
                include "beli.php";
            } elseif($_GET["page"]=="edit") {
                include "barang_edit.php";
            } elseif($_GET["page"]=="hapus") {
                include "barang_hapus.php";
            } elseif($_GET["page"]=="hasil") {
                include "bukti_beli.php";
            } elseif($_GET["page"]=="hapus") {
                include "barang_hapus.php";
            } elseif($_GET["page"]=="rekap") {
                include "rekap_penjualan.php";
            } 

          ?>
      </div><!--/row-->

      <hr>

    </div><!--/.fluid-container-->
    <br>
    <br>
    <br>

    <div id="tombol">
      <?php 
        include "footer.php";
      ?>
    </div>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>

  </body>
</html>