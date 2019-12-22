<?php

require_once('./lib/DataProvider.php');
require_once('./lib/ItemCard.php');
?>



<!-- BEGIN CONTAINER -->
<div class="container">

  <!-- .row -->
  <div class="row">

    <!-- BEGIN .col-lg-3 SIDE -->
    <div class="col-lg-3">

      <?php
      $side = 1;
      if (isset($_GET["side"]) == true) #nếu có tham số thì set lại, mặc định là SIDE bình thường
        $side = $_GET["side"];

      switch ($side) {
        case 1:
          include "pSide.php";
          break;
        case 2:
          include "timkiemnangcao/pSideTimKiem.php"; #Side Tìm kiếm nâng cao
          break;
        default:
          include "pages/p404error.php";
          break;
      }
      ?>

    </div>
    <!-- END .col-lg-3 -->

    <!-- .col-lg-9 -->
    <div class="col-lg-9">

      <?php

      $content = 1;
      if (isset($_GET["content"]) == true) #nếu có tham số thì set lại, mặc định là CONTENT bình thường
        $content = $_GET["content"];

      switch ($content) {
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
        case 5:
          include "pages/timkiemnangcao/pSanPhamTimKiemNangCao.php";
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
<!-- END CONTAINER -->