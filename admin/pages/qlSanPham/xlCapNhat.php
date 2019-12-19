<?php
   include "../../../lib/DataProvider.php";

   if(isset($_POST["id"]))
   {
       $id = $_POST["id"];
       $ten = $_POST["txtTen"];
       $hang = $_POST["cmbHang"];
       $loai = $_POST["cmbLoai"];
       #$hinh = $_POST["fHinh"];
       $gia = $_POST["txtGia"];
       $ton = $_POST["txtTon"];
       $ban = $_POST["txtBan"];
       $mota = $_POST["txtMoTa"];

     
       $sql = "UPDATE SanPham SET TenSanPham = '$ten',MaLoaiSanPham=$loai,
       MaHangSanXuat=$hang,GiaSanPham=$gia,SoLuongTon=$ton,SoLuongBan=$ban,
       MoTa='$mota' WHERE MaSanPham = $id";
   
       DataProvider::ExecuteQuery($sql);
   }

   DataProvider::ChangeURL("../../index.php?c=2");
?>