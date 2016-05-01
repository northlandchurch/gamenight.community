<?php
  error_reporting(E_ALL ^ E_NOTICE);
  require '../lib/db-config.php';
  // $featuredevents = DB::Query("select name, description, location, date, time, contact from featuredevents where active is true;");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Night Community</title>

    <link rel="stylesheet" href="http://bootswatch.com/cyborg/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fonticons.com/ffd19869.js"></script>
    <script charset="utf-8">
    $(document).ready(function() {
       window.setTimeout("fadeMyDiv();", 2000);
        }
      )
      function fadeMyDiv() {
       $(".fadeaway").fadeOut('slow');
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Game Night</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- <li><a href="events/"><i class="fa fa-calendar"></i> Events</a></li> -->
            <li><a href="http://orlandogamers.net"><i class="fa fa-comments-o"></i> Forums</a></li>
            <li><a href="http://orlandogamers.net/slack"><i class="fa fa-slack"></i> Slack</a></li>
            <li class="active"><a href="index.php"><i class="fa fa-calendar"></i> Add Featured Event</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1>Add Event <small></small></h1>
          <hr>
        </div>
      </div>

      <div class="row">

        <div class="col-xs-12 col-md-8">
          <?php
              if ($_GET['success'] == true) {
                echo "<div id=\"successdiv\" class=\"alert alert-success fadeaway\" role=\"alert\">Event has been added.</div>";
              }
          ?>
          <form action="addevent.php" method="POST">
            <div class="form-group">
              <label for="eventtitle">Event Title:</label>
              <input type="text" class="form-control" id="eventtitle" name="name" placeholder="Enter the title of the event.">
            </div>
            <div class="form-group">
              <label for="eventdate">Date:</label>
              <input type="text" class="form-control" id="eventdate" name="date"  placeholder="e.g., Thursdays, Mar 25th">
            </div>
            <div class="form-group">
              <label for="eventtime">Time:</label>
              <input type="text" class="form-control" id="eventtime" name="time"  placeholder="e.g., 6PM - 8:30PM">
            </div>
            <div class="form-group">
              <label for="eventlocation">Location:</label>
              <input type="text" class="form-control" id="eventlocation" name="location"  placeholder="Enter the address on one line.">
            </div>
            <div class="form-group">
              <label for="eventdescription">Description:</label>
              <textarea class="form-control" id="eventdescription" name="description"  rows="3" placeholder="Enter a long description of the event."></textarea>
            </div>
            <div class="form-group">
              <label for="eventcontact">Contact:</label>
              <input type="text" class="form-control" id="eventcontact" name="contact"  placeholder="e.g., robert.johnson@northlandchurch.net, 407-555-1212, or even a link to another website.">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>

        <div class="col-xs-12 col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Information</h3>
            </div>
            <div class="panel-body">
              All of these fields are free form. You are able to enter HTML to
              embed links to external websites. If you enter something and need
              to make a change later email Robert Johnson.
            </div>
          </div>
        </div>

      </div> <!-- row -->

      <hr>
      <footer>
        <p class="text-right">Super secret small text no one reads.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
