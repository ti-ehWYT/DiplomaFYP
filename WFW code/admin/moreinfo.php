<?php
if(isset( $_GET["id"])){
        require_once('../php/dbConn.php');
        $id = $_GET["id"];

        $sql = "SELECT * FROM locations WHERE id=$id";
        $resultSet = mysqli_query($conn, $sql);
        
    }else{
        header("Location:../admin/approve.php/");
        exit();
    }
?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../CSS/moreinfo.css" rel="stylesheet">
<title>Info</title>
</head>


<body>
    <div class="back">
</div>
    <?php
    $numRows = mysqli_num_rows($resultSet);
    if($numRows > 0){
        for($i = $numRows; $i >= 1; --$i){
            $row = mysqli_fetch_assoc($resultSet);?>
            <div class="infocontain">

                <h3 class="title">Name: <?=$row['name']?></h3> 
                <h3 class="title">Address: <?=$row['address']?></h3> 
                <h3 class="title">Latitude: <?=$row['lat']?></h3> 
                <h3 class="title">Longtitude: <?=$row['lng']?></h3> 
                <h3 class="title">Phone number: <?=$row['phone']?></h3> 
                <h3 class="title">Description: <?=$row['description']?></h3> 
                <h3 class="title">COPY THIS:<br><br>['Name:<?=$row['name']?> &lt;p&gt; Address: <?=$row['address']?>&lt;/p&gt;&lt;p&gt;Description: <?=$row['description']?>&lt;/p&gt;&lt;p&gt;Phone No.: <?=$row['phone']?>&lt;/p&gt;', <?=$row['lat']?>,<?=$row['lng']?>, x],
                <br><br><br><a id="backButton" href="../admin/approve.php">Return</a>
            </div>
        <?php
        }
    }else{?>
        <h1 class="title">No Info Found In Database!</h1>
    <?php  
    }?>
        
</body>

</html>