<?php
  $page_title = "Amazon Listing Generator";
  require "header.php";
?>

<?php 
  if(isset($_SESSION['userId'])) {
    require 'apps/amazonApp.php';

  } else {
    require 'listingLanding.php';
  }
?>

<?php
  require "footer.php";
?>