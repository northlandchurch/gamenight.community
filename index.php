<?php
  require 'lib/mu/meetup_functions.php';
  require 'lib/writeevents.php';
  require 'lib/db-config.php';
  $featuredevents = DB::Query("select name, description, location, date, time, contact from featuredevents;");
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

    <!-- bxSlider Javascript file -->
    <script src="lib/js/bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="lib/js/bxslider/my_bxslider_theme.css" rel="stylesheet" />
    <script type="text/javascript">
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          auto: true,
          controls: false
        });
      });
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
            <li><a href="addevent/"><i class="fa fa-calendar"></i> Add Featured Event</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">

        <div class="col-md-7">
          <h1 class="media-heading">Let's Play</h1>
            <p class="lead">
              Our hope is to help you get connected to other gamers, board gaming clubs,
              sport leagues and video game tournaments.
            </p>
            <p>
              <img src="assets/gn_logo.png" class="img-responsive" alt="" />
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
              Robert Johnson a message</a> on <i class="fa fa-twitter"></i>.
            </p>
        </div>

        <div class="col-md-5">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Featured Events</h3>
            </div>
            <div class="panel-body">
              <ul class="bxslider">
                <?php writeevents($featuredevents); ?>
              </ul>
            </div>
          </div>
        </div>

      </div> <!-- row -->

      <div class="row">
        <div class="col-md-12">
          <h2>Local Groups and Events</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <img class="media-object" src="assets/GameIcon_Chess.png" width="55px" alt="Chess Icon">
            </div>
            <div class="media-body">

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Board Games Groups</h3>
                </div>
                <div class="panel-body">
                  <p>
                    <a href="http://stanleygamingguild.com">The Stanley Gaming Guild</a>
                  </p>
                  <p>
                    <a href="http://gamenight.northlandchurch.net">Game Night at Northland</a>
                  </p>
                  <?php getbgmeetupgroups($meetupapikey); ?>
                </div>
              </div>

              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Board Games Events</h3>
                </div>
                <div class="panel-body">
                  <?php getbgmeetupevents($meetupapikey); ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <img class="media-object" src="assets/GameIcon_Joystick.png" width="55px" alt="Joystick Icon">
            </div>
            <div class="media-body">

              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Video Games Groups</h3>
                </div>
                <div class="panel-body">
                  <p>
                    <a href="http://gamenight.northlandchurch.net">Game Night at Northland</a>
                  </p>
                  <?php getvgmeetupgroups($meetupapikey); ?>
                </div>
              </div>

              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Video Games Events</h3>
                </div>
                <div class="panel-body">
                  <?php getvgmeetupevents($meetupapikey); ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <img class="media-object" src="assets/GameIcon_Soccer.png" width="55px" alt="Soccer Ball Icon">
            </div>
            <div class="media-body">

              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sport Groups</h3>
                </div>
                <div class="panel-body">
                  <?php getsmeetupgroups($meetupapikey); ?>
                  <p>
                    <a href="http://gamenight.northlandchurch.net">Game Night at Northland</a>
                  </p>
                </div>
              </div>

              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sporting Events</h3>
                </div>
                <div class="panel-body">
                  <?php getsmeetupevents($meetupapikey); ?>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div> <!-- row -->
      <div class="row">
        <div class="col-xs-12">
          <hr>
          <footer>
            <p class="text-right">Don't read this.</p>
          </footer>
        </div>

      </div>
    </div> <!-- /container -->
  </body>
</html>
