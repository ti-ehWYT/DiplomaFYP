<?php      
include('dbConn.php');  
$sid = $_POST['sid'];  
$pwd = $_POST['pwd'];  
  
    //to prevent from mysqli injection  
    $sid = stripcslashes($sid);  
    $pwd = stripcslashes($pwd);  
    $sid = mysqli_real_escape_string($conn, $sid);  
    $pwd = mysqli_real_escape_string($conn, $pwd);  
  
    $sql = " select * from staff where sid = '$sid' and pwd = '$pwd'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        echo "<h1><center> Login successful Auto directing to approve page</center></h1>";  
        header( "refresh:2; url=../admin/approve.php" ); 
    exit();
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
        echo '<form><input type="button" value="Return to previous page" onClick="javascript:history.go(-1)"></form>';
    }     
?>  