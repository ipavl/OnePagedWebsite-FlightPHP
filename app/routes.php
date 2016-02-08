<?php

Flight::route('/', function() {
  $db = Flight::db();
  $projects = $db->query('SELECT * FROM projects ORDER BY date DESC;');
  Flight::render_page('index', array('title' => 'hey', 'projects' => $projects));
});
