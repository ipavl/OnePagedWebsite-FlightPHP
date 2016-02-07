<?php

/**
 * Renders $page using the 'default' layout.
 */
Flight::map('render_page', function($page, $data = null, $key = null) {
  Flight::render('layouts/header', $data, 'header');
  Flight::render($page, $data, 'body');
  Flight::render('layouts/footer', $data, 'footer');

  Flight::render('layouts/default', $data);
});
