<h4>Sản phẩm theo hãng</h4>
<div class="row">
    <?php

    if (isset($_GET["id"]))
        $id = $_GET["id"];
    else
        DataProvider::ChangeURL("index.php?layout=404");
        
    $sql = "select * from SanPham where BiXoa = 0 and MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);


    while ($row = mysqli_fetch_array($result)) {
        $itemcard = new ItemCard($row["MaSanPham"], $row["HinhURL"], $row["TenSanPham"], $row["GiaSanPham"]);
        $itemcard->create();
        #lib/ItemCard.php
    }

    ?>
</div>