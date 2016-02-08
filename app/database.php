<?php

try {
  $db = Flight::db();

  $db->exec('CREATE TABLE projects(
    id INTEGER PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    date DATE,
    link TEXT,
    description TEXT,
    tags VARCHAR(255)
  );');
} catch (PDOException $e) {
  echo $e->getMessage();
}
