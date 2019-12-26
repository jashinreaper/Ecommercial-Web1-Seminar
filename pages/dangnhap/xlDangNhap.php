<?php
include '../../lib/DataProvider.php';
session_start();



if (isset($_POST["username"]) && isset($_POST["password"])) {


    $un = $_POST["username"];
    $pw = $_POST["password"];
    $sql = "select * from TaiKhoan where BiXoa = 0 
    and TenDangNhap = '$un' and MatKhau='$pw' ";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
    if ($row == null)
        DataProvider::ChangeURL("../../index.php?layout=404"); //sai tk mk
    else {
        $_SESSION["MaTaiKhoan"] = $row["MaTaiKhoan"];
        $_SESSION["MaLoaiTaiKhoan"] = $row["MaLoaiTaiKhoan"];
        $_SESSION["TenHienThi"] = $row["TenHienThi"];
    }

    if ($row["MaLoaiTaiKhoan"] == 2) //admin
        {
            DataProvider::ChangeURL("../../admin/index.php");
     } 
    else
     {
        $curURL = $_SESSION["path"];    //chuyển về trang hiện tại
        DataProvider::ChangeURL($curURL);
    }
} else 
{
    DataProvider::ChangeURL("../../index.php?layout=404");//tk mk rỗng
}

?>