<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="../CSS/fb.css" rel="stylesheet">

<title>Foodbank</title>
</head>

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
<body>

<div class="row"> 
    <div class="container">
      
<?php 
error_reporting(E_ALL & E_NOTICE);
$key=$_POST['search']??"";
?>
    <form name="fSearch" id="fSearch" action="foodbank.php" method="post">
      <input type="text" placeholder="Search Here" name="search" value="<?=$key?>">
      <button type="submit" class="search"><i class="fa fa-search"></i></button>
      
    </form>
    <a href="../php/add_fb.php"><button class="add"><i class="fa fa-plus"> Add Foodbank Here</i></button></a>
<br>

  <?php
      $serverName = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbName = "wfw";

// Create connection
$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM foodbank";
$result = mysqli_query($conn, $sql);

if($key!=""){
    $sql="SELECT * FROM foodbank WHERE name LIKE '%$key%'
    UNION
    SELECT * FROM foodbank WHERE address LIKE '%$key%'";
}else{
    $sql="SELECT * FROM foodbank;";
}

$result = mysqli_query($conn, $sql);
?>

<?php
    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {

?>
<br>
    <div class="box">
          <img src="../images/<?=$row["picture"]?>"/>
          <h4>Name: <?=$row['name']?></h4>
          <h5>Address: <?=$row['address']?></h5>
          <h5>Operating Hours: <?=$row['hour']?></h5>
          <h5>Phone: 0<?=$row['number']?></h5>
    </div><br>


    <?php
      }
    }
    ?>

    </div>
<?php
mysqli_close($conn);
?>
    
    </div>
</div>


</body>
</html>