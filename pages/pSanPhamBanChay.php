<?php
$sql = "select * from sanpham order by SoLuongBan desc";
$result = DataProvider::ExecuteQuery($sql);
?>

<h2>Sản phẩm bán chạy nhất</h2>

<div class="row">


    <?php
    for ($i = 0; $i < 12; $i++) {
        $row = mysqli_fetch_array($result);

        $itemcard = new ItemCard($row["MaSanPham"], $row["HinhURL"], $row["TenSanPham"], $row["GiaSanPham"]);
        $itemcard->create();
        #lib/ItemCard.php
    }
    ?>

</div>