<?php
$mysqli = new mysqli('localhost','root','root','labdb');
if($mysqli->connect_errno){
  echo "error in connection";
}else{
  //no error
  echo "connection success";
}
 ?>
<html>

<head>
  <meta charset="utf-8">
  <title>myHomework-Account</title>
  <link rel="stylesheet" href="css/master.css">
</head>

<body>
  <div id="header">
    <p id="header_text">iSchool : ITS351 Mini Project</p>
  </div>
  <div id="menu">
    <ul>
      <li><a href="dashboard.php" id="menu_text">Back</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <div id="container">
    <div class="account_table_container">
      <table>
        <tr>
          <td>Name</td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
        </tr>
      </table>
    </div>

  </div>
</body>

</html>
