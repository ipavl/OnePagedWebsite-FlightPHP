<?php

Flight::route('/', function() {
  Flight::render_page('index', array('title' => 'hey'));
});
