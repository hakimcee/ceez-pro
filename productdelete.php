<?php
include "connection.php";
$del = $_GET["deli"];
$delete = "DELETE FROM product WHERE pid='$del'";
$result=mysqli_query($con,$delete);
    header("location:viewproduct.php");
?>