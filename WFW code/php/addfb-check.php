<?php  
session_start();
// include "dbConn.php";

if (isset($_POST['submit'])) {
	require_once('dbConn.php');
	
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$addr = validate($_POST['addr']);
	$hour = validate($_POST['hour']);
	$number = validate($_POST['number']);
	$picture =validate($_FILES["picture"]["name"]);
	
	$uploaddir = '../images/';
    $uploadfile = $uploaddir . $picture;

	if (empty($name)) {
		header("Location: add_fb.php?error=Name is required");
	    exit();
	}else if(empty($addr)){
        header("Location: add_fb.php?error=Address is required&");
	    exit();
	}
	else if(empty($hour)){
        header("Location: add_fb.php?error=OperatingHours is required");
	    exit();
	}
	else if(empty($number)){
        header("Location: add_fb.php?error=Phone Number is required");
	    exit();
	}

    else if(empty($picture)){
        header("Location: add_fb.php?error=Image is required");
	    exit();
	}

	else{
		if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
			$sql = "INSERT INTO `foodbank`(`name`, `address`, `hour`, `number`, `picture`) VALUES ('$name', '$addr', '$hour', '$number', '$picture');";
			$result =  mysqli_query($conn,$sql);
			if ($result) {
				header("Location: add_fb.php?success=Foodbank has been created successfully");
					exit();
			}else {
					header("Location: add_fb.php?error=unknown error occurred");
					exit();
			}
		}	
	}
	
}else{
	header("Location: add_fb.php");
	exit();
}

