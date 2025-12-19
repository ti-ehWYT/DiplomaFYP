<?php
session_start();
{
    $id = $_GET["id"] ?? "";
    require_once('../php/dbConn.php');

    $sql = "UPDATE locations SET status='done' WHERE id=$id;";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location:  ../admin/approve.php?info=accepted");


}

;
?>