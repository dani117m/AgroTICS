<?php 
    include 'db.php';

    
    $id = $_GET['id'];

    $sql = "SELECT * FROM campo WHERE id='$id' ";
    $query = mysqli_query($conn ,$sql);
    $row = mysqli_fetch_array($query);

?>