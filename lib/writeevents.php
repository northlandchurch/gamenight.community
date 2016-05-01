<?php
  function writeevents($featuredevents){
    foreach ($featuredevents as $event) {
      echo "<li>" . PHP_EOL;
      echo "<h4>" . $event['name'] . "</h4>" . PHP_EOL;
      echo "<p><strong class=\"text-warning\">Date:</strong> " . $event['date'] . "</p>" . PHP_EOL;
      echo "<p><strong class=\"text-warning\">Time:</strong> " . $event['time'] . "</p>" . PHP_EOL;
      echo "<p><strong class=\"text-warning\">Location:</strong> " . $event['location'] . "</p>" . PHP_EOL;
      echo "<p><strong class=\"text-warning\">Description:</strong> " . $event['description'] . "</p>" . PHP_EOL;
      echo "<p><strong class=\"text-warning\">Contact:</strong> " . $event['contact'] . "</p>" . PHP_EOL;
      echo "</li>" . PHP_EOL;
    }
  }
?>
