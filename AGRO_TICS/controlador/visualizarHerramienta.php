<?php
error_reporting(0);
require '../controlador/db.php';

$sql="SELECT * FROM herramientas";

$query=mysqli_query($conn, $sql);
$row= mysqli_fetch_array($query);

?>