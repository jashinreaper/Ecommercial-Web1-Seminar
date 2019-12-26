<?php
session_start();
//đường dẫn hiện tại
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

  <!-- font-awesome -->
  <link rel="stylesheet" href="lib/fontawesome/css/all.min.css">

  <!-- Bootstrap core JavaScript -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

  <!-- custom JavaScript -->
  <script language="JavaScript" type="text/javascript" src="js/myjs.js"></script>
</head>

<body>

  <?php
  include "modules/mHeader.php";


  $layout = 1;
  if (isset($_GET["layout"]) == true) #nếu có tham số thì set lại, mặc định là layout 1(home)
    $layout = $_GET["layout"];

  switch ($layout) {
    case 1:
      include "pages/pIndex.php"; //layout có sidebar bên trái và content ở giữa
      break;
    case 2:
      include "pages/giohang/pIndex.php";
      break;
    case 3:
      include "pages/dangky/pIndex.php";
      break;
    default:
      include "pages/p404error.php";
      break;
  }

  include "modules/mFooter.php";
  ?>


</body>

</html>