<h1>Quản lý sản phẩm</h1>
<?php
    $a = 1;
    if(isset($_GET["a"]))
       $a=$_GET["a"];
    
    switch ($a)
    {
        case 1:
            include "pages/qlSanPham/pDanhSach.php";
        break;
        case 2:
            include "pages/qlSanPham/pCapNhap.php";
        break;
        case 2:
            include "pages/qlSanPham/pCThemmoi.php";
        break;
        default:
        include "pages/pError.php";
    break;
    }
?>