<?php require 'lib/meetup_opts.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Meetup API Results</title>
  </head>
  <body>
    <?php
      try {

        $response = $meetupevents->getOpenevents();
        echo "<h1>Open Events</h1>";
        foreach ($response->results as $event) {
          echo "<p>" . $event->name . "</p>";
          // echo "<p>" . $event->description . "</p>";
        }


        $response = $meetupgroups->getGroups();
        echo "<h1>Groups</h1>";
        foreach ($response->results as $group) {
          echo "<p>" . $group->name . "</p>";
          // echo "<p>" . $group->description . "</p>";
        }

        // var_dump($response);

      }
      catch(Exception $e) {
        echo $e->getMessage();
      }
    ?>
  </body>
</html>
