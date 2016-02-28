<?php require 'lib/meetup_functions.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Night Community</title>
    <!-- <link rel="stylesheet" href="lib/bootstrap.min.css"> -->


    <link rel="stylesheet" href="http://bootswatch.com/cyborg/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="http://bootswatch.com/lumen/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css"> -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fonticons.com/ffd19869.js"></script>
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
          <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Game Night</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="events/"><i class="fa fa-calendar"></i> Events</a></li>
            <li><a href="http://orlandogamers.net"><i class="fa fa-comments-o"></i> Forums</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- <img src="assets/gn_logo.png" class="img-responsive" alt="" /> -->
          <h1 class="media-heading">Let's Play</h1>
            <p class="lead">
              Our hope is to help you get connected to other gamers, board gaming clubs,
              sport leagues and video game tournaments.
            </p>
            <h2>Gaming is good for you.</h2>
            <p>
              Truth is, it can be hard to connect to people these days.
              Whether it's through sports, board games or even video games, playing
              games allow you to hang out together with friends and family, creating
              deeper bonds of friendship.
            </p>
            <p>
              Currently, this website is centered around the central Florida region.
              Our hope is to broaden the appeal of game nights world-wide, until then
              all of the Meetup events and groups are typically within a 5-20 mile
              range of Longwood, FL.
            </p>
            <p>
              If you would like one of your events featured this website, <a href="https://twitter.com/rburkej">just send
              me, Robert Johnson, a message</a> on <i class="fa fa-twitter"></i>.
            </p>
        </div>
        <div class="col-md-6">

          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Featured Events</h3>
            </div>
            <div class="panel-body">
              <h4>Game Night at Stonecastle Apartments</h4>
              <p>
                <img src="public/stone.png" class="img-responsive img-rounded" alt="event image"/>
              </p>
              <p>
                <strong class="text-warning">Date:</strong> March 11, 2016
              </p>
              <p>
                <strong class="text-warning">Time:</strong> 7PM - 11PM
              </p>
              <p>
                <strong class="text-warning">Description:</strong> Come join us for an evening of gaming!
                Play some video games and board games in a open and friendly environment.
                Possible Super Smash Tournament!
              </p>
              <p>
                <strong class="text-warning">Contact:</strong> Interested? <a href="http://orlandogamers.net">Leave a message here.</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2>Local Groups and Events <small>powered by Meetup.com</small></h2>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="assets/GameIcon_Chess.png" width="55px" alt="...">
              </a>
            </div>
            <div class="media-body">
              <!-- <h4 class="media-heading">Board Games</h4> -->
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Board Games Events</h3>
                </div>
                <div class="panel-body">
                  <?php getbgmeetupevents($meetupapikey); ?>
                </div>
              </div>
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Board Games Groups</h3>
                </div>
                <div class="panel-body">
                  <?php getbgmeetupgroups($meetupapikey); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="assets/GameIcon_Invader.png" width="55px" alt="...">
              </a>
            </div>
            <div class="media-body">
              <!-- <h4 class="media-heading">Video Games</h4> -->
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Video Games Events</h3>
                </div>
                <div class="panel-body">
                  <?php getvgmeetupevents($meetupapikey); ?>
                </div>
              </div>
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Video Games Groups</h3>
                </div>
                <div class="panel-body">
                  <?php getvgmeetupgroups($meetupapikey); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="assets/GameIcon_Soccer.png" width="55px" alt="...">
              </a>
            </div>
            <div class="media-body">
              <!-- <h4 class="media-heading">Sports</h4> -->
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sporting Events</h3>
                </div>
                <div class="panel-body">
                  <?php getsmeetupevents($meetupapikey); ?>
                </div>
              </div>
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sport Groups</h3>
                </div>
                <div class="panel-body">
                  <?php getsmeetupgroups($meetupapikey); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- row -->

      <hr>

      <footer>
        <p>Super secret small text no one reads.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
