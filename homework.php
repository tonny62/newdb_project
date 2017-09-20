<!DOCTYPE html>
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
        <li><a href="dashboard.php" id="menu_text">Back</a></li>
      </ul>
    </div>
    <div class="clear"></div>
    <?php // TODO: connect to database ?>
    <?php // TODO: create add button ?>
    <div id="container">
      <div id="table_wrapper">
        <table class="timetable">
            <tr>
              <th>no.</th>
              <th>Name</th>
              <th>Subject</th>
              <th>Deadline</th>
              <th>Status</th>
            </tr>
            <?php
              for ($i=1; $i <= 15; $i++) {
                  echo "
                  <tr>
                    <td>{$i}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                ";
              }
             ?>
        </table>
      </div>
      </div>
        </body>
</html>
