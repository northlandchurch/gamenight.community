<?php
require 'meetup.php';
require 'meetup_api_key.php';

$meetupevents = new Meetup(array(
  'key' => $meetupapikey,
  'zip' => '32750',
  'radius' => '10',
  'topic' => 'games'
));

$meetupgroups = new Meetup(array(
  'key' => $meetupapikey,
  'zip' => '32750',
  'radius' => '10',
  'topic' => 'games'
));
