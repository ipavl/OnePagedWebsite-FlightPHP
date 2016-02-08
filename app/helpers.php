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

/**
 * Creates the HTML for displaying a project's meta information (title/date).
 * @param $project array An array containing a project's information
 * @return string An HTML string
 */
function render_project_meta($project) {
  $p = '<h3 class="title">';
  !$project['link'] ?: $p .= '<a href="' . $project['link'] . '">';
  $p .= $project['title'];
  !$project['link'] ?: $p .= '</a>';
  $p .= '</h3><span class="date">';
  $p .= date('F Y', strtotime($project['date']));
  $p .= '</span>';
  return $p;
}

/**
 * Creates the HTML for displaying a project's tags.
 * @param $project array An array containing a project's information
 * @return string An HTML string
 */
function render_project_tags($project) {
  $p = '';

  foreach(explode(',', $project['tags']) as $tag) {
    $p .= '<li class="tag">' . $tag . '</li>';
  }

  return $p;
}
