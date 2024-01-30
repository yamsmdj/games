<?php 
require "config/config.php"; 
require "function/header.fn.php";


?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/asset/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/asset/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/asset/favicon/favicon-16x16.png">
  <link rel="manifest" href="/asset/favicon/site.webmanifest">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title><?php $_SERVER['SCRIPT_NAME'] ?></title>

</head>


<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="/index.php">Games</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-light">
          <?=nav_item('/games.php','My Games');?>
          <?=nav_item('/contact.php','Contact');?>
        </ul>
  </nav>
       
