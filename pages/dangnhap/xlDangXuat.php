<?php
include '../../lib/DataProvider.php';
session_start();
session_destroy();
$curURL = $_SESSION["path"];    //chuyển về trang hiện tại
DataProvider::ChangeURL($curURL);
?>