<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/newcss.css">
</head>

<body>
  <div id="wrapper">
    <div id="head">
      <div id="logo">
        <img src="pics/icon.jpg" id="logo_pic">
      </div>
      <div id="logout" class="test">
        <p><a href="index.php">Logout</a></p>
      </div>
      <div id="account" class="test">
        <p><a href="account.php">My Account</a></p>
      </div>
    </div>
    <div id="content_wrapper">
      <div id="header1">
        <h1 id="header1_text">iSchool</h1>
      </div>
      <div id="table_wrapper">
        <table id="table">
          <tr>
            <!-- TODO: add logo for different functions -->
            <td><a href="homework.php"><img src="pics/homework_icon.png" style="width:160px;height:160px" alt=""></a></td>
            <!-- <td><a href="projects.php"><img src="pics/homework_icon.png" alt=""></a></td> -->
            <td><a href="timetable.php"><img src="pics/timetable.png" style="width:160px;height:160px" alt=""></a></td>
            <td><a href="notes.php"><img class="img-circle" src="pics/nn.gif" style="width:160px;height:160px" alt=""></a></td>
          </tr>
          <tr>
            <td>Homeworks</td>
            <!-- <td>Projects</td> -->
            <td>Timetable</td>
            <td>Notes</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>
