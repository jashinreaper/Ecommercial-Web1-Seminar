<?php
$sql = "select * from loaisanpham";
$result = DataProvider::ExecuteQuery($sql);
?>

<!-- BEGIN LOẠI -->
<h3 class="my-1">Loại sản phẩm</h3>

<ul class="list-unstyled components pt-0 ml-1">
  <?php
  while ($row = mysqli_fetch_array($result)) {
  ?>
    <li>
      <a href="index.php?layout=1&content=3&id=<?php echo $row["MaLoaiSanPham"]; ?>" class="list-group-item"><?php echo $row["TenLoaiSanPham"]; ?></a>
    </li>
  <?php
  }
  ?>

</ul>
<!-- END LOẠI -->


<?php
$sql = "select * from hangsanxuat";
$result = DataProvider::ExecuteQuery($sql);
?>



<!-- BEGIN HÃNG -->
<h3 class="my-1">Hãng sản xuất</h3>

<ul class="list-unstyled components pt-0 ml-1">

  <?php
  while ($row = mysqli_fetch_array($result)) {
  ?>
    <li>
      <a href="index.php?layout=1&content=2&id=<?php echo $row["MaHangSanXuat"]; ?>" class="list-group-item"><?php echo $row["TenHangSanXuat"]; ?></a>
    </li>
  <?php
  }
  ?>
</ul>
<!-- END HÃNG -->