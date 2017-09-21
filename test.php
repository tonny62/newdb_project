<?php
  $mysqli = new mysqli('localhost', 'root', 'root', 'miniproject');
  if ($mysqli->connect_errno) {
      echo "Failed Connecting to the DATABASE";
  } else {
      echo "success";
      if (isset($_POST['period']) && isset($_POST['subject'])) {
        if(count($_POST['period'])>2){
          echo "Too many time period! Try again";
        }else{
          echo "My subject : ".$_POST['subject']."<br>";
          echo "My period : ";
          foreach ($_POST['period'] as $key => $value) {
            echo "$value ";
          }
        }
      }
  }
  echo "<br> <hr> <br>";
 ?>
  <html>

  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <div id="addsubject">
      <form action="test.php" method="post">
        Subject : <input type="text" name="subject"> <br>
        Study time : <br>
        <table border="1">
          <tr>
            <td>Date</td>
            <td>9.00-11.20</td>
            <td>11.40-12.00</td>
            <td>13.00-14.20</td>
            <td>14.40-16.00</td>
          </tr>
          <tr>
            <td>Monday</td>
            <td><input type="checkbox" name="period[]" value="11"></td>
            <td><input type="checkbox" name="period[]" value="12"></td>
            <td><input type="checkbox" name="period[]" value="13"></td>
            <td><input type="checkbox" name="period[]" value="14"></td>
          </tr>
          <tr>
            <td>Tuesday</td>
            <td><input type="checkbox" name="period[]" value="21"></td>
            <td><input type="checkbox" name="period[]" value="22"></td>
            <td><input type="checkbox" name="period[]" value="23"></td>
            <td><input type="checkbox" name="period[]" value="24"></td>
          </tr>
          <tr>
            <td>Wednesday</td>
            <td><input type="checkbox" name="period[]" value="31"></td>
            <td><input type="checkbox" name="period[]" value="32"></td>
            <td><input type="checkbox" name="period[]" value="33"></td>
            <td><input type="checkbox" name="period[]" value="34"></td>
          </tr>
          <tr>
            <td>Thursday</td>
            <td><input type="checkbox" name="period[]" value="41"></td>
            <td><input type="checkbox" name="period[]" value="42"></td>
            <td><input type="checkbox" name="period[]" value="43"></td>
            <td><input type="checkbox" name="period[]" value="44"></td>
          </tr>
          <tr>
            <td>Frvalueay</td>
            <td><input type="checkbox" name="period[]" value="51"></td>
            <td><input type="checkbox" name="period[]" value="52"></td>
            <td><input type="checkbox" name="period[]" value="53"></td>
            <td><input type="checkbox" name="period[]" value="54"></td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td><input type="checkbox" name="period[]" value="61"></td>
            <td><input type="checkbox" name="period[]" value="62"></td>
            <td><input type="checkbox" name="period[]" value="63"></td>
            <td><input type="checkbox" name="period[]" value="64"></td>
          </tr>
        </table>
        <br>
        <input type="submit" name="" value="submit">
      </form>
    </div>
  </body>

  </html>
