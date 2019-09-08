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
  <title><?php echo $page_title ?></title>  

  <!-- bootstrap cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- custome styles -->
  <link rel="stylesheet" href="css/style.css">  

</head>
  <body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Script Machine</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="amazonScript.php">Amazon Listing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="facebookScript.php">Facebook Ads</a>
          </li>
        </ul>
        <?php  
          if (isset($_SESSION['userId'])) {
            echo '<form class="form-inline mt-2 mt-md-0" action="includes/logout.inc.php" method="post">          
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="logout-submit">Logout</button>
                  </form>';
          } else {
            echo '<form class="form-inline mt-2 mt-md-0" action="includes/login.inc.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/email">
                    <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="login-submit">Login</button>
                  </form>
                  <br><br>
                    <a class="btn btn-outline-primary my-2 my-sm-0 ml-2" href="signup.php">Signup</a>
                  <br><br>';
          }
        ?>
      </div>
    </nav>
  </header>

      
 