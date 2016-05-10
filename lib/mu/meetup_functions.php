<?php
require 'meetup.php';
require 'meetup_api_key.php';

function getbgmeetupevents($meetupapikey) {
  try {
    $meetupevents = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '12',
      'topic' => 'board-games'
    ));

    $response = $meetupevents->getOpenevents();

    $i = 1;
    foreach ($response->results as $event) {
      if ($i > 10) {
        break;
      }
      echo '<p><a href="' . $event->event_url . '">' . $event->name . '</a></p>';
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getbgmeetupgroups($meetupapikey) {
  try {
    $meetupgroups = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '15',
      'topic' => 'board-games'
    ));

    $response = $meetupgroups->getGroups();

    $i = 1;
    foreach ($response->results as $group) {
      if ($i > 8) {
        break;
      }
      echo '<p><a href="' . $group->link . '">' . $group->name . '</a></p>';
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getvgmeetupevents($meetupapikey) {
  try {
    $meetupevents = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '20',
      'topic' => 'videogame'
    ));

    $response = $meetupevents->getOpenevents();

    $i = 1;
    foreach ($response->results as $event) {
      if ($i > 10) {
        break;
      }
      echo '<p><a href="' . $event->event_url . '">' . $event->name . '</a></p>';
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getvgmeetupgroups($meetupapikey) {
  try {
    $meetupgroups = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '20',
      'topic' => 'videogame'
    ));

    $response = $meetupgroups->getGroups();

    $i = 1;
    foreach ($response->results as $group) {
      if ($i > 9) {
        break;
      }
      echo '<p><a href="' . $group->link . '">' . $group->name . '</a></p>';
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getsmeetupevents($meetupapikey) {
  try {
    $meetupevents = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '8',
      'topic' => 'sports'
    ));

    $response = $meetupevents->getOpenevents();

    $i = 1;
    foreach ($response->results as $event) {
      if ($i > 10) {
        break;
      }
      echo '<p><a href="' . $event->event_url . '">' . $event->name . '</a></p>';
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}

function getsmeetupgroups($meetupapikey) {
  try {
    $meetupgroups = new Meetup(array(
      'key' => $meetupapikey,
      'zip' => '32750',
      'radius' => '12',
      'topic' => 'sports'
    ));

    $response = $meetupgroups->getGroups();

    $i = 1;
    foreach ($response->results as $group) {
      if ($i > 9) {
        break;
      }
      echo '<p><a href="' . $group->link . '">' . $group->name . '</a></p>' . PHP_EOL;
      $i++;
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}
