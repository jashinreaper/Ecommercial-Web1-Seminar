<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">Shop Luxury</a>

    <!-- mobile button  -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- /mobile button  -->

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"> <!--active class  -->
          <a class="nav-link" href="index.php">Trang chủ
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?layout=1&side=2&content=5">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>


    <div class="nav-icons-container d-flex align-items-center justify-content-between">
      <div class="nav-icon">

        <form class="form-inline" action="index.php?layout=1&side=2&content=5" method="post">
          <input class="form-control mr-sm-2" type="text" name="searchTxt" placeholder="Nhập tên sản phẩm">
          <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
        </form>

      </div>



      <?php
      if (isset($_SESSION["MaTaiKhoan"])) {
      ?>

        <div class="username"><?php echo "Hello, " . $_SESSION["TenHienThi"];  ?></div>,
        <div class="nav-icon">

          <div class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <form class="p-2 text-secondary" action="">



                <?php
                              if ($_SESSION["MaLoaiTaiKhoan"] == 2) {
                ?>
                  <a href="./admin/index.php">Admin Panel </a>
                <?php
                              }

                ?>
                <div class="dropdown-divider mt-0"></div>

                <a href="./pages/taikhoan/xlDangXuat.php">Đăng xuất </a>
              </form>



            </div>
          </div>
        </div>

      <?php
                            } else {
      ?>
        <div class="nav-icon">

          <div class="username">guest</div>

        </div>

        <div class="nav-icon">
          <div class="dropdown">
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <form class="p-2 text-secondary" method="POST" action="./pages/taikhoan/xlDangNhap.php">
                <div class="form-group">
                  <input name="username" type="text" class="form-control" placeholder="Nhập tên tài khoản" required>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Nhập mật khẩu" required>
                </div>
                <button type="submit" class="btn btn-primary my-2">Đăng nhập!</button>
              </form>
              <div class="dropdown-divider mt-0"></div>
              <a class="dropdown-item" href="./index.php?layout=3">Bạn chưa có tài khoản? Đăng ký ngay!</a>
              <a class="dropdown-item" href="">Quên mật khẩu? Ấn để lấy lại!</a>

            </div>
          </div>
        </div>

      <?php

                            }

      ?>



      <?php
                            if (isset($_SESSION["sosanpham"])) #neu co san pham trong gio
                            {
                              $soSanPham = $_SESSION["sosanpham"];
                            } else {
                              $soSanPham = 0;
                            }
                            #hien thi badge so luong sp ở dưới
      ?>


      <div class="nav-icon">

        <div class="dropdown">
          <a href="./index.php?layout=2">
            <i class="fa fa-shopping-cart"></i>
            <span class="badge"><?php echo $soSanPham ?></span>
          </a>


        </div>
      </div>
    </div>

  </div>

  </div>

</nav>