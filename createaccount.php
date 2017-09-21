<?php
  $mysqli = new mysqli('localhost','root','root','miniproject');
  if ($mysqli->connect_errno) {
    echo "connection error";
  }else{
    //not error
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['fname']) && isset($_POST['lname'])){
      $q = "INSERT INTO `user` (`user_id`, `username`, `password`, `fname`, `lname`) VALUES (NULL, '".$_POST['username']."', '".$_POST['password']."', '".$_POST['fname']."', '".$_POST['lname']."')";
      $result = $mysqli->query($q);
      if(!$result){
        $status = "Error";
      }else{
        $status = "Success!! Please go back and login";
      }
    }
  }
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Account</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div id="wrapper">
    <form action="createaccount.php" method="post">
      <table>
        <tr>
          <td>Username :</td>
          <td><input type="text" name="username"></td>
        </tr>
        <tr>
          <td>Password :</td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td>First Name :</td>
          <td><input type="text" name="fname"></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><input type="text" name="lname"></td>
        </tr>
        <tr>
          <td><input type="submit" value="Create Account"></td>
        </tr>
      </table>
    </form>
    <span><?php if(isset($status)) {echo "<p>$status</p>";}; ?></span>
    <br>
    <span><a href="index.php" id="back">Go Back</a></span>
  </div>
</body>

</html>
