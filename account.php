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
      <h2 style="text-align:center">* My Profile *</h2>
      <table>
        <tr><td class="center"><img src="pics/acc1.png" style="width:160px;height:160px" alt=""></td></tr>
      </table>
      <br>
      <table>
        <tr id="tb1">
          <td><b>Username : </b></td>
          <td> parewari</td>
        </tr>
        <tr id="tb1">
          <td><b>Password : </b></td>
          <td> *******</td>
        </tr>
      </table>
      <br>
      <table>
        <tr id="tb1">
          <td><b>Name : </b></td>
          <td>  WARI</td>
        </tr>
        <tr id="tb2">
          <td><b>Surname : </b></td>
          <td>  MAROENGSIT</td>
        </tr>
        <tr id="tb1">
          <td><b>Address : </b></td>
          <td> TT</td>
        </tr>
        <tr id="tb2">
          <td><b>Email : </b></td>
          <td> maroengsit.pwr@gmail.com</td>
        </tr>

        <tr>
          <td id="tb2" colspan="2"><input type="submit" value="BACK"></td>
        </tr>
      </table>
    </div>

  </div>
</body>

</html>
