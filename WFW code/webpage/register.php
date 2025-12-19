<?php 
    session_start();
    require 'C:\xampp\htdocs\DiplomaFYP\WFW code\config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../CSS/register.css" rel="stylesheet" />
  <link href="../CSS/fixedlayout.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <title>Register</title>
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

  <div class="bgheader">

    <p>Register as white flag members</p>

  </div>


  <!---------------------- END OF HEADER ---------------------->
  <section class="content">
    <div class="cont">
      <div class="form-cont">
      <form class="form" action="../php/registerbackend.php" method="POST">
        <fieldset>
          <legend>Personal Information</legend>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>


       <br><h5>Location</h5>
            You can click the button below to use your current location as your address or type out manually<br><br>
            <div id="map">
            </div>
            <button id="showMe" class="btn">Use My Location</button>
            
              <div id="locationList"></div>
              <div class="input-field">
                <input id="address" name="address" type="text">
                <label class="active" for="address">Address (Area and Street)</label>
                <div class="errorCheck" id='addEmpty'></div>
              </div>
              <div class="input-field">
                <input class="input_fields" id="locality" type="text">
                <label class="active" for="locality">Locality</label>
              </div>
              <div class="input-field">
                <input id="city" type="text">
                <label class="active" for="city">City/District/Town</label>
              </div>
              <div class="input-field">
                <input id="postal_code" type="text">
                <label class="active" for="pin_code">Pin Code</label>
              </div>


              <div class="input-field">
                <input id="state" type="text">
                <label class="active" for="State">State</label>
                <input type="hidden" id="lat" name="lat">
                <input type="hidden" id="lng" name="lng">
              </div>
            
            <!-- You could add a fallback address gathering form here -->
          
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
          <script src="https://maps.googleapis.com/maps/api/js?key=<?= $googleMapsApiKey ?> &callback=initMap" async defer></script>
          <script src="../JavaScript/register.js"></script> <br>
          <h6>Name:*</h6> 
          <input type="text" name="fullname" placeholder="Your full name..." required><br>
        <br>Leave below blank if dont have email or phone (Not encourage)<br><br>
          <h6>Email :</h6>
          (Will email you if your application approved) 
                <input type="email" class="input" id="email" name="email" placeholder="Email Address" /><br>
                <br><h6>Enter your phone number:</h6> 
          (will message you the process if no email, and the phone number will show on map)
          <input type="tel" id="phone" name="phone"placeholder="Format:01x-xxx-xxxx">
          <div class="errorCheck" id='phoneEmpty'></div>
          <br><h6>Notes:*</h6>
          <textarea name="description" autocomplete="off" placeholder="Why and What you wan (Food/Shelter/Baby items/daily supplies)"></textarea><br>
          <div class="submit">
            <input type="submit" name="submit" value="Send">
        </fieldset>
        </form>
      </div>
    </div>


</body>
<!--------------------------FOOTER------------------------------>
<footer>
  <p>Copyright @ Final Year Project </p>
  <p>All Rights Reserved</p>
</footer>

</html>