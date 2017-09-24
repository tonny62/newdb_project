<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>myHomework</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <div id="wrapper">
    <div id="logo">
      <img src="pics/icon.jpg" id="logo">
    </div>
    <div id="form">
      <form action="action_page.php">
        <table class="center">
          <tr>
            <td colspan="2">
              <?php
              if (isset($_GET['status'])) {
                  $status = $_GET['status'];
                  if ($status == 'failed') {
                      echo "<p>Invalid ID or Password</p>";
                  }
              } else {
              }
            ?>
            </td>
          </tr>
          <tr>
            <td><label>Username</label></td>
            <td><input type="text" name="uname"></td>
          </tr>
          <tr>
            <td>
              <lable>Password</lable>
            </td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" name="button">Log in</button></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div id="wrapper2">
    <span class="downtext">
          <p>Forget password?</p>
      </span>
    <span class="downtext">
        <a href="createaccount.php"><p>Create Account</p></a>
	</span>
  </div>
</body>

</html>
