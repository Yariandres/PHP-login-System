<?php
$page_title = "index page";
  require "header.php";
?>

<div class="container">
  <main role="main" class="main-section text-center">
      <?php
        if (isset($_SESSION['userId'])) {
          echo '<section class=" text-center mt-5">
                  <div class="container">
                    <h1 class="jumbotron-heading">Welcome to the World Most Powerfull Script Machine</h1>
                    <p class="lead text-muted">Choose your script platform below</p>
                    <p>              
                    </p>
                  </div>                  
                  <a href="amazonScript.php" class="btn btn-outline-warning my-2">Amazon Listing</a>
                  <a href="facebookScript.php" class="btn btn-outline-primary my-2">Facebook Ads</a>
                </section>';
        } else {          
          require "landing.php";        
        }
      ?>
  </main>
<div>

<?php
  require "footer.php";
?>