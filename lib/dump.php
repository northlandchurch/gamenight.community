<?php require 'meetup_opts.php';?>
  <?php
    try {
      $response = $meetupevents->getGroups();
      echo "<pre>";
      var_dump($response);
      echo "</pre>";
    }
    catch(Exception $e) {
      echo $e->getMessage();
    }
  ?>
