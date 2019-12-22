<?php
if (isset($_POST['searchTxt'])) {
    $value = $_POST['searchTxt'];
    $sql = "select * from SanPham where BiXoa = 0 and TenSanPham like N'%$value%'";
    $result = DataProvider::ExecuteQuery($sql);
} else {
    $sql = "select * from SanPham where BiXoa = 0";
    $result = DataProvider::ExecuteQuery($sql);
}

?>

<!-- BEGIN RESULT -->
<div class="wrapper m-3">
    <div class="row">
        <div class="col-md-9">
            <h3><i class="fa fa-search"></i> Kết quả</h3>
            <hr>
            <!-- BEGIN SEARCH INPUT -->

            <!-- END SEARCH INPUT -->
        </div>
    </div>
    <hr>

    <div class="result">
        <h4>Danh sách sản phẩm</h4>
        <hr class="w-50">
        <div class="row" id="data">

            <?php
            while ($row = mysqli_fetch_array($result)) {
                $itemcard = new ItemCard($row["MaSanPham"], $row["HinhURL"], $row["TenSanPham"], $row["GiaSanPham"]);
                $itemcard->create();
            }
            ?>


        </div>
    </div>



</div>