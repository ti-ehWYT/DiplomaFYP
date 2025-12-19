<?php
session_start();
require 'C:\xampp\htdocs\DiplomaFYP\WFW code\config.php'; // load your API key
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../CSS/fixedlayout.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Main Page</title>
</head>

<body>
  <!---------------------- START OF HEADER ---------------------->
  <div id="navbar">
    <a href="index.php" id="logo">White Flag Web WFW</a>
    <div id="navbar-right">
      <a href="map.php">Map</a>
      <a href="register.php">Register</a>
      <a href="quiz.php">Quiz</a>
      <a href="aboutus.php">About Us</a>
      <a href="foodbank.php">Foodbank</a>
    </div>
  </div>


  
<!---------------------- END OF HEADER ---------------------->

<title>Custom Markers</title>
    <link rel="stylesheet" type="text/css" href="../CSS/map.css" />
    <script src="../JavaScript/map.js"></script>
    <!-- jsFiddle will insert css and js -->

    <div id="map"></div>


    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

      <script src="https://maps.googleapis.com/maps/api/js?key=<?= $googleMapsApiKey ?> &callback=initMap" async defer></script>
  </body>
</html>