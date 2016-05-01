<?php error_reporting(E_ALL ^ E_NOTICE);

require_once '../lib/db-config.php';

DB::insert('featuredevents', array(
  'name' => $_POST['name'],
  'description' => $_POST['description'],
  'location' => $_POST['location'],
  'date' => $_POST['date'],
  'time' => $_POST['time'],
  'contact' => $_POST['contact']
));

header("Location: index.php?success=true");
