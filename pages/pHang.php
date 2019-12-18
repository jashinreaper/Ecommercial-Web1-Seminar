<?php
$sql = "select * from hangsanxuat";
$result = DataProvider::ExecuteQuery($sql);
?>




<h3 class="my-4">Hãng sản xuất</h3>
<div class="list-group">
  <?php
  while ($row = mysqli_fetch_array($result)) {
    ?>

    <a href="index.php?layout=1&content=2&id=<?php echo $row["MaHangSanXuat"]; ?>" class="list-group-item"><?php echo $row["TenHangSanXuat"]; ?></a>

    <?php 
  }
  ?>

</div>