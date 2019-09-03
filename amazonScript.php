<?php
$page_title = "Amazon Listing Script";
  require "header.php";
?>

<?php 
  if(isset($_SESSION['userId'])) {
    require 'apps/amazonApp.php';

  } else {
    echo '<section class="jumbotron text-center mt-5">
            <div class="container">
              <h1 class="jumbotron-heading">Welcome to the Amazon Listing Script Machine</h1>
              <p class="lead text-muted">The most powerful way to create an Amazon listing in just few clicks</p>
              <p>
                <a href="signup.php" class="btn btn-primary my-2">Create a listing</a>        
              </p>
            </div>
          </section>';
  }
?>

<?php
  require "footer.php";
?>