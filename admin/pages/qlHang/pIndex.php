<h1>Quản lý hãng sản xuất</h1>
<?php
    $a = 1;
    if(isset($_GET["a"]))
       $a=$_GET["a"];
    
    switch ($a)
    {
        case 1:
            include "pages/qlHang/pDanhSach.php";
        break;
        case 2:
            include "pages/qlHang/pCapNhap.php";
        break;
        default:
        include "pages/pError.php";
    break;
    }
?>