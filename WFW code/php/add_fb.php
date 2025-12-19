<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../CSS/add.css" rel="stylesheet">
<title>Foodbank</title>
</head>

<div id="navbar">
    <a href="index.php" id="logo">White Flag Web WFW</a>
    <div id="navbar-right">
      <a href="../webpage/map.php">Map</a>
      <a href="../webpage/register.php">Register</a>
      <a href="../webpage/quiz.php">Quiz</a>
      <a href="../webpage/aboutus.php">About Us</a>
      <a href="../webpage/foodbank.php">Foodbank</a>
    </div>
</div>
<body>
     <div class="box">
          <form action="addfb-check.php" method="post" enctype="multipart/form-data">
     	<h2>Add Foodbank</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name:</label>
               <input type="text" name="name" placeholder="Name"><br>

          <label>Address:</label>
               <input type="text" name="addr" placeholder="Address"><br>

     	<label>Operating Hours: </label>
                <input type="text" name="hour" placeholder="Operating Hours"><br>

        <label>Phone Number: </label>
          <input type="text" name="number" placeholder="Phone number"><br>

        <label>Picture: </label>
        <input type="file" id="upload" name="picture"  enctype="multipart/form-data"><br>

          <button type="submit" name="submit">Submit</button><br><br>
    
        
     </form>
</div>
</body>
</html>