<?php
session_start();

$_SESSION["path"] = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Shop Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap core JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>



</head>

<body>

  <?php
  include "modules/mHeader.php";


  $a = 1;
  if (isset($_GET["a"]) == true) #nếu có tham số truyền vào, mặc định là home
    $a = $_GET["a"];
  switch ($a) {
    case 1:
      include "pages/pIndex.php";
      break;
    case 2:
      include "pages/pIndex.php";
      break;
    case 3:
      include "pages/pIndex.php";
      break;
    case 4:
      include "pages/pIndex.php";
      break;
    case 5:
      include "pages/giohang/pIndex.php";
      break;
    case 6:
      include "pages/taotaikhoan/pIndex.php";
      break;
    default:
      include "pages/p404error.php";
      break;
  }

  include "modules/mFooter.php";
  ?>


</body>

</html>