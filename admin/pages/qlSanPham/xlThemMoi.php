<?php
   include "../../../lib/DataProvider.php";

   if(isset($_POST["txtTen"]))
   {
   
       $ten = $_POST["txtTen"];
       $hang = $_POST["cmbHang"];
       $loai = $_POST["cmbLoai"];
    #$hinh = $_POST["fHinh"];
     $gia = $_POST["txtGia"];
     $ton = $_POST["txtTon"];
     $mota = $_POST["txtMoTa"];
     $ngaynhap = date("Y-m-d H:i:s");
      
       $sql = "INSERT INTO SanPham(NgayNhap,TenSanPham, MaHangSanXuat,MaLoaiSanPham,GiaSanPham
       ,SoLuongTon,MoTa) VALUES('$ngaynhap','$ten','$hang','$loai','$gia','$ton','$mota')";
       
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=2");
