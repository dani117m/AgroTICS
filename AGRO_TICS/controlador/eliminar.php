<?php
error_reporting(0);

session_start();

if (empty($_SESSION["id"])){
    header("Location: index.php");
}


require "../controlador/db.php";


    $id=$_GET['id'];



    $sql="DELETE FROM especies WHERE id='$id'";
    $query=mysqli_query($conn, $sql);
    /** 
    */

?>
