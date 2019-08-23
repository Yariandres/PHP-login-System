<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="This is a meta description. this will be used for search engines">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP loggin System</title>
  <link rel="stylesheet" href="style.css">

  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  
  <header>

    <nav>
      <a href="#">Loging System</a>

      <ul>
        <a href="index.php"><li>Home</li></a>
        <a href="#"><li>Porfolio</li></a>
        <a href="#"><li>About</li></a>
        <a href="#"><li>Contact</li></a>
      </ul>      

    <?php  
      if (isset($_SESSION['userId'])) {
        echo '<form action="includes/logout.inc.php" method="post">          
                <button type="submit" name="logout-submit">Logout</button>
              </form>';
      } else {
        echo '<form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/email">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
              </form>
              <br><br>

              <a href="signup.php">Signup</a>
              <br><br>';
      }
    ?>


    </nav>
 
  </header>