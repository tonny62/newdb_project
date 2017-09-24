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
      <li><a href="notes.php" id="menu_text">Back</a></li>
    </ul>
  </div>
  <div class="clear"></div>
  <div id="container">
    <form id="noteform" action="readnote.php">
      <table>
        <tr>
          <td>Topic</td>
          <td><input type="text" name="topic"></td>
        </tr>
        <tr>
          <td colspan="2"><textarea name="field" rows="8" cols="80"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Save Note!"></td>
        </tr>
      </table>
    </form>

  </div>
</body>

</html>
