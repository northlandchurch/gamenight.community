<?php require 'lib/meetup_functions.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Game Night Community</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://use.fonticons.com/ffd19869.js"></script>

    <link rel="stylesheet" href="http://bootswatch.com/cyborg/bootstrap.min.css">

    <!-- bxSlider Javascript file -->
    <script src="lib/js/bxslider/jquery.bxslider.min.js"></script>
    <!-- bxSlider CSS file -->
    <link href="lib/js/bxslider/my_bxslider_theme.css" rel="stylesheet" />

    <!-- Piwik -->
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setDomains", ["*.gamenight.community"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="//orlandogamers.net/piwik/";
        _paq.push(['setTrackerUrl', u+'piwik.php']);
        _paq.push(['setSiteId', 3]);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="//orlandogamers.net/piwik/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
    <!-- End Piwik Code -->

    <script type="text/javascript">
    navigator.geolocation.getCurrentPosition(GetLocation);
    function GetLocation(location) {
        console.log(location.coords.latitude);
        console.log(location.coords.longitude);
        console.log(location.coords.accuracy);
    }
    </script>

  </head>
  <body>
    <script type="text/javascript">
    $(document).ready(function(){
      $('.featuredevents').bxSlider({
        auto: false,
        controls: false
        });
      });
    </script>
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
            <!-- <li><a href="events/"><i class="fa fa-calendar"></i> Events</a></li> -->
            <li><a href="http://orlandogamers.net"><i class="fa fa-comments-o"></i> Orlando Gamers Discussion Forums</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="media-heading">Let's Play<em>!</em></h1>
            <p class="lead">
              Our hope is to help you get connected to fellow gamers, board gaming clubs,
              sport leagues and video game tournaments.
            </p>
        </div>
        <div class="col-md-7">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="assets/IMG_0290.jpg" class="img-rounded" alt="...">
              </div>
              <div class="item">
                <img src="assets/IMG_0234.jpg" class="img-rounded" alt="...">
              </div>
              <div class="item">
                <img src="assets/IMG_0235.jpg" class="img-rounded" alt="...">
              </div>
              <div class="item">
                <img src="assets/IMG_0236.jpg" class="img-rounded" alt="...">
              </div>
              <div class="item">
                <img src="assets/IMG_0237.jpg" class="img-rounded" alt="...">
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
        <div class="col-md-5">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Featured Events</h3>
            </div>
            <ul class="featuredevents">
              <li>
                <div class="panel-body">
                  <h4>Game Night at Northland</h4>
                  <p>
                    <strong class="text-warning">Date:</strong> Thursdays
                  </p>
                  <p>
                    <strong class="text-warning">Time:</strong> 6PM - 8:30PM
                  </p>
                  <p>
                    <strong class="text-warning">Address:</strong> The Rink, 530 Dog Track Road, Longwood, FL 32750 <i class="fa fa-arrows"></i>
                  </p>
                  <p>
                    <strong class="text-warning">Description:</strong> Every week we play
                    sports, video games and boardgames. Halo, Super Smash, Street Fighter IV
                    and more. Play some video games and board games in a open and friendly environment.
                  </p>
                  <p>
                    <strong class="text-warning">Contact:</strong> Interested? Check out our website: <a href="http://gamenight.northlandchurch.net">Game Night at Northland</a>.
                  </p>
                </div>
              </li>
              <li>
                <div class="panel-body">
                  <h4>Game Night at Stonecastle Apartments</h4>
                  <p>
                    <strong class="text-warning">Date:</strong> March 11, 2016
                  </p>
                  <p>
                    <strong class="text-warning">Time:</strong> 7PM - 11PM
                  </p>
                  <p>
                    <strong class="text-warning">Address:</strong> 2015 New Stonecastle Terrace Winter Park, FL 32792 <i class="fa fa-arrows"></i>
                  </p>
                  <p>
                    <strong class="text-warning">Description:</strong> Come join us for an evening of gaming!
                    Play some video games and board games in a open and friendly environment.
                    Possible Super Smash Tournament!
                  </p>
                  <p>
                    <strong class="text-warning">Contact:</strong> Interested? <a href="http://orlandogamers.net/viewtopic.php?f=14&t=24">Leave a message here.</a>
                  </p>
                </div>
              </li>
              <li>
                <div class="panel-body">
                  <h4>Wargame Night, Orlando Wargamers</h4>
                  <p>
                    <strong class="text-warning">Date:</strong> March 26th, 2016
                  </p>
                  <p>
                    <strong class="text-warning">Time:</strong> 4PM - 11PM
                  </p>
                  <p>
                    <strong class="text-warning">Address:</strong> 1341 Stanley Street, Longwood, FL 32750 <i class="fa fa-arrows"></i>
                  </p>
                  <p>
                    <strong class="text-warning">Description:</strong>
                    We are going to have another wargame night. Last time we played an overlord game of Memoir '44. I posted some photos to this Guild as well as here: <a href="http://orlandogamers.net/viewtopic.php?f=6&t=23">http://orlandogamers.net/</a>
                    Not sure what we are going to do, which all depends on how many of us are going to come. Last time there was six of us.
                    Chime in if you care to join us.
                  </p>
                  <p>
                    <strong class="text-warning">Contact:</strong> Interested? <a href="http://orlandogamers.net/viewtopic.php?f=14&t=25">Leave a message here.</a>
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h3>Groups Nearby</h3>
          <hr>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="assets/GameIcon_Soccer.png" width="55px" alt="...">
              </a>
            </div>
            <div class="media-body">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h3 class="panel-title">Sport Groups</h3>
                </div>
                <div class="panel-body">
                  <p>
                    <a href="http://gamenight.northlandchurch.net/index.php/all-events/sports-events">Game Night at Northland</a>
                  </p>
                  <?php getsmeetupgroups($meetupapikey); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="media">
            <div class="media-left media-top">
              <a href="#">
                <img class="media-object" src="assets/GameIcon_Chess.png" width="55px" alt="...">
              </a>
            </div>
            <div class="media-body">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Board Games Groups</h3>
                </div>
                <div class="panel-body">
                  <p>
                    <a href="http://gamenight.northlandchurch.net/index.php/all-events/board-game-events">Game Night at Northland</a>
                  </p>
                  <p>
                    <a href="http://stanleygamingguild.com">The Stanley Gaming Guild</a>
                  </p>
                  <p>
                    <a href="http://stanleygamingguild.com/Orlando-Wargamers/">Orlando Wargamers</a>
                  </p>
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
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h3 class="panel-title">Video Games Groups</h3>
                </div>
                <div class="panel-body">
                  <p>
                    <a href="http://gamenight.northlandchurch.net/index.php/all-events/video-game-events">Game Night at Northland</a>
                  </p>
                  <?php getvgmeetupgroups($meetupapikey); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- row -->
      <div class="row">
        <div class="col-md-9">
          <h3>Gaming Events Nearby</h3>
          <hr>
          <style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style>
          <div class='embed-container'><iframe width="100%" height="100%" frameborder="0" style="border:0"
src="http://www.google.com/maps/embed/v1/place?q=place_id:ChIJt918xiRy54gRgENQDBulVc0&key=AIzaSyBMzqp1RkmsZKY7l5azJzhHoFkw-BTXg1Q" allowfullscreen></iframe></div>
        </div>
        <div class="col-md-3">
          <h3>More Info</h3>
          <hr>
          <p>
            This site uses your browsers location to pull data from <a href="http://meetup.com">Meetup.com</a> based
            on your current location. If you decline to share your location with us, we will default to the central
            Florida area, USA.
          </p>
          <p>
            If you would like one of your events featured this website, <a href="https://twitter.com/rburkej">just send
            me, Robert Johnson, a message</a> on <i class="fa fa-twitter"></i>.
          </p>
        </div>
      </div>

      <hr>

      <footer>
        <p class="text-right">April 5, 2063 &#169; Bet you don't know what happens on that date.</p>
      </footer>
    </div> <!-- /container -->
  </body>
</html>
