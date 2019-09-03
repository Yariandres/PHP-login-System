<?php
$page_title = "Sign-up page";
  require "header.php";
?>

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
  
  <div class="container signin-main text-center">
    <?php
      if (isset($_SESSION['userId'])) {
        echo '<h1>BOOM! You are logged in!</h1>';
      } else {
        echo '
              <form class="form-signin shadow-sm rounded" action="includes/signup.inc.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Register now!</h1>
                <input class="form-control" type="text" name="uid" placeholder="Username">
                <input class="form-control" type="email" name="mail" placeholder="E-mail">
                <input class="form-control" type="password" name="pwd" placeholder="Password">
                <input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat password">
                <br>
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
                <br><br>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="signup-submit">Sign up</button>
              </form>';
      }
    ?>
  <div>

<?php
  require "footer.php";
?>