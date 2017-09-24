<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'miniproject');
if ($mysqli->connect_errno) {
    echo "error in connection";
} else {
    if(isset($_POST['name']) && isset($_POST['subject']) && isset($_POST['deadline'])){
      $q = "INSERT INTO `homework` (`homework_id`, `homework_name`, `homework_subject`, `homework_deadline`, `homework_status`) VALUES (NULL, '".$_POST['name']."', '".$_POST['subject']."', '".$_POST['deadline']."', '');";
      $result = $mysqli->query($q);
      if (!$result) {
        $status = "error";
        echo "error querying";
      }else{
        $status = "ok";
        echo "ok";
      }
    }
    $q = "SELECT * FROM homework;";
    $result = $mysqli->query($q);
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>myHomework-Homeworks</title>
    <link rel="stylesheet" href="css/master.css">
  </head>

  <body>
    <div id="header">
      <p id="header_text">iSchool : ITS351 Mini Project</p>
    </div>
    <div id="menu">
      <ul>
        <li>
          <a href="dashboard.php" id="menu_text">Back</a>
        </li>
      </ul>
    </div>
    <div class="clear"></div>
    <?php // TODO: connect to database?>
    <?php // TODO: create add button?>
    <div id="container">
      <div id="table_wrapper">
        <table class="timetable">
          <tr>
            <th id="table-orange">no.</th>
            <th id="table-orange">Name</th>
            <th id="table-orange">Subject</th>
            <th id="table-orange">Deadline</th>
            <th id="table-orange">Status</th>
          </tr>

          <?php

        while($row = $result->fetch_array()){

          if ($row['homework_id']%2 != 0){
            echo "
                <tr id='tab-gray'>
                  <td>".$row['homework_id']."</td>
                  <td>".$row['homework_name']."</td>
                  <td>".$row['homework_subject']."</td>
                  <td>".$row['homework_deadline']."</td>
                  <td><input type='checkbox'";
                  if ($row['homework_status']!="done") {
                    echo ">";
                  } else {
                    echo "CHECKED>";
                  }
                  echo "</tr>";
          }else{
            echo "
                <tr id='tab-white'>
                  <td>".$row['homework_id']."</td>
                  <td>".$row['homework_name']."</td>
                  <td>".$row['homework_subject']."</td>
                  <td>".$row['homework_deadline']."</td>
                  <td><input type='checkbox'";
                  if ($row['homework_status']!="done") {
                    echo ">";
                  } else {
                    echo "CHECKED>";
                  }
                  echo "</tr>";
          }

    }
             ?>

        </table>
      </div>
      <hr>
      <br>
      <div id="addhomework">
        <form action="homework.php" method="post">
          <table>
            <tr>
              <td id="tb1"><b>Name :</b></td>
              <td id="tb1"><input type="text" name="name"></td>
            </tr>
            <tr>
              <td id="tb2"> <b>Subject :</b></td>
              <td id="tb2">
                <select name="subject">
                  <option value="its351">its351</option>
                  <option value="css226">css226</option>
                  <option value="its322">its322</option>
                </select>
              </td>
            </tr>
            <tr>
              <td id="tb1"><b>Deadline :</b></td>
              <td id="tb1"><input type="date" name="deadline" value="">
                <br></td>
            </tr>
            <tr>
              <td id="tb2" colspan="2"><input type="submit" value="ADD HOMEWORK"></td>
            </tr>
          </table>

        </form>
      </div>
    </div>
  </body>

</html>
