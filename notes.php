<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>myHomework-notes</title>
  <link rel="stylesheet" href="css/master.css">
</head>

<body>
  <?php // TODO: upload note pdf ?>
  <div id="header">
    <p id="header_text">iSchool : ITS351 Mini Project</p>
  </div>
  <div id="menu">
    <ul>
      <li><a href="dashboard.php" id="menu_text">Back</a></li>
      <li><a href="writenote.php" id="menu_text">Write New Note</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <div id="container">
    <form action="readnote.php">
      <table>
        <tr>
          <td>No</td>
          <td>Topic</td>
          <td>Read</td>
        </tr>
        <tr>
          <td>1</td>
          <td>Something about miniproject</td>
          <td><input type="submit" value="read"></td>
        </tr>
      </table>
    </form>

  </div>
</body>

</html>
