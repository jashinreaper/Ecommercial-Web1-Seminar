<?php
$sql = "select * from loaisanpham";
$result = DataProvider::ExecuteQuery($sql);
?>


<h3 class="my-4">Loại sản phẩm</h3>


<div class="list-group">
  <?php
  while ($row = mysqli_fetch_array($result)) {
    ?>

    <a href="index.php?layout=1&content=3&id=<?php echo $row["MaLoaiSanPham"]; ?>" class="list-group-item"><?php echo $row["TenLoaiSanPham"]; ?></a>

    <?php 
  }
  ?>

</div>