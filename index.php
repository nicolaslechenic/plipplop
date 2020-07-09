<?php
//Demarre la session
session_start();

//autoload.php genere avec composer
require_once __DIR__. '/vendor/autoload.php';

if (file_exists(__DIR__ . '/.env')) {
  $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1><?= $_ENV['SLACK_TOKEN'] ?></h1>
  
</body>
</html>