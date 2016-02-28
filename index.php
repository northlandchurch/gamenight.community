<?php require 'lib/meetup_opts.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Night Community</title>
    <!-- <link rel="stylesheet" href="lib/bootstrap.min.css"> -->
    <link rel="stylesheet" href="http://bootswatch.com/cyborg/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
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
        <div class="col-sm-6">
          <!-- <img src="assets/gn_logo.png" class="img-responsive" alt="" /> -->
          <h1 class="media-heading">Let's Play</h1>
            <p class="lead text-primary">
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
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="col-sm-6">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Featured Events</h3>
            </div>
            <div class="panel-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="assets/IMG_0235.jpg" alt="...">
                    <div class="carousel-caption">
                      Superfun!
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/IMG_0290.jpg" alt="...">
                    <div class="carousel-caption">
                      Morun!
                    </div>
                  </div>
                    <div class="item">
                      <img src="assets/IMG_0236.jpg" alt="...">
                      <div class="carousel-caption">
                        Some games being played.
                    </div>
                  </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
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
              <h4 class="media-heading">Local </h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
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
              <h4 class="media-heading">Video Games</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
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
              <h4 class="media-heading">Sports</h4>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
              do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.
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
