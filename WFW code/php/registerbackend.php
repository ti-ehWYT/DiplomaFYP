<?php
session_start();
// Manage inputs
$emailErr = "";
$email = "";
function input($data)
{
    $data = trim($data, " \t\n\r");
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['submit'])) {
    require_once('dbConn.php');

    $name      = input($_POST['fullname']);
    $email      = input($_POST['email']);
    $address = input($_POST['address']);
    $lat = input($_POST['lat']);
    $lng = input($_POST['lng']);
    $phone    = input($_POST['phone']);
    $description = input($_POST['description']);
    $errors = array();



    if (empty($name)) {
        header("Location: ../webpage/register.php?error=Name is required");
        exit();
    } else if (empty($address)) {
        header("Location: ../webpage/register.php?error=Address is required&");
        exit();
    } else if (empty($description)) {
        header("Location: ../webpage/register.php?error=Description is required");
        exit();
    }
    // check if e-mail address is well-formed
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../webpage/register.php?error=Email format wrong");
        exit();
    }
    if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)) {
        header("Location: ../webpage/register.php?error=Phone format wrong");
        exit();
      }





    if (count($errors) == 0) {
        $sql = "INSERT INTO locations (name,email, address, lat, lng, description, phone, status) 
                VALUES ('$name','$email', '$address', '$lat', '$lng', '$description', '$phone', 'Pending')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
        echo "<h1><center> Register sucessful, your application status will be emailed or send through message after getting verified manually! Returning to register page.. </center></h1>";
        header("refresh:7; url=../webpage/register.php");
        echo '<a href="../webpage/register.php">Back to register page</a>';

        exit();
    } else {
        $_SESSION["errorRegisterList"] = $errors;
        mysqli_close($conn);

        exit();
    }
} else {

    exit();
}
