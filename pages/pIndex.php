<?php 

require_once('./lib/DataProvider.php');
require_once('./lib/ItemCard.php');
?>


  
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- .col-lg-3 SIDE -->
      <div class="col-lg-3">

        <?php
        include "pSide.php"
        ?>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <?php




        $a = 1;
        if (isset($_GET["a"]) == true) #nếu có tham số truyền vào, mặc định là home
          $a = $_GET["a"];
        switch ($a) {
          case 1:
            include "pSlider.php";
            include "pSanPhamMoi.php";
            include "pSanPhamBanChay.php";
            break;
          case 2:
            include "pages/pSanPhamTheoHang.php";
            break;
          case 3:
            include "pages/pSanPhamTheoLoai.php";
            break;
          case 4:
            include "pages/pChiTietSanPham.php";
            break;
          default:
            include "pages/p404error.php";
            break;
        }




        ?>


      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->