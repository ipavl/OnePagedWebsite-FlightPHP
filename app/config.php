<?php

# Site name to appear in the <title> tags and footer copyright text
define('SITE_NAME', 'Your Name');

# Database connection information
Flight::register('db', 'PDO', array('sqlite:../db.sqlite3'));

# The directory to look for views in
Flight::set('flight.views.path', '../views');

# The file extension of view files
Flight::set('flight.views.extension', '.phtml');
