<?php
  $uid = $_GET['uname'];
  $password = $_GET['password'];
  $url = "http://localhost:80/miniproject";
  // TODO: connect to database
  if ($uid == "admin" AND $password == "admin") {
    header("Location: $url/dashboard.php");
    exit;
  }else{
    header("Location: $url/index.php?status=failed");
  }
 ?>
