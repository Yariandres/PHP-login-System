<main>
<?php
  require "header.php";
?>
<h1>Signup</h1>
  <?php
    if (isset($_GET['error'])) {
      if($_GET['error'] == "emptyfields") {
        echo '<p style="color: red;">Fill in all the fields</p>';

      } else if ($_GET['error'] == "invaliduidmail") {
        echo '<p style="color: red;">Invalid username and email</p>';

      } else if ($_GET['error'] == "invaliduid") {
        echo '<p style="color: red;">Invalid username</p>';

      } else if ($_GET['error'] == "invalidmail") {
        echo '<p style="color: red;">Invalid email</p>';

      } else if ($_GET['error'] == "passwordcheck") {
        echo '<p style="color: red;">Your password do not match</p>';

      } else if ($_GET['error'] == "usertaken") {
        echo '<p style="color: red;">User name is already taken</p>';
      }
    } 
    // else if ($_GET["signup"] == "success") {
      // echo '<p style="color: green;">Signup success</p>';
    // }
  ?>
  
  <?php
    if (isset($_SESSION['userId'])) {      
    } else {
      echo '<form action="includes/signup.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username">
              <input type="email" name="mail" placeholder="E-mail">
              <input type="password" name="pwd" placeholder="Password">
              <input type="password" name="pwd-repeat" placeholder="Repeat password">
              <button type="submit" name="signup-submit">Submit</button>
            </form>';
    }
  ?>    
  </main>

<?php
  require "footer.php";
?>