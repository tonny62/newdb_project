<?php
  if (isset($_POST['uname']) && isset($_POST['password'])) {
    $uid = $_POST['uname'];
    $password = $_POST['password'];
    $url = "http://localhost:80/miniproject";
    $mysqli = new mysqli('localhost','root','root','miniproject');
    if($mysqli->connect_errno){
      echo "error in connection";
    }else{
      //no error
      $q = "SELECT COUNT(*) FROM user WHERE username = '$uid' AND password = '$password';";
      $result = $mysqli->query($q);
      if (!$result) {
        // echo "error in query";
      }else {
        // echo 'no error in query';
        $row = $result->fetch_array();
        if ($row[0] == '1') {
          header("Location: $url/dashboard.php");
        }else {
          header("Location: $url/index.php?status=incorrect");
        }
      }

    }
  }else{
    header("Location: $url/index.php?status=notcomplete");
  }

  // TODO: connect to database
  // if ($uid == "admin" AND $password == "admin") {
  //   header("Location: $url/dashboard.php");
  //   exit;
  // }else{
  //   header("Location: $url/index.php?status=failed");
  // }
 ?>
