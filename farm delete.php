<?php
include "connection.php";
$del = $_GET["deli"];
$delete = "DELETE FROM farmer WHERE farmid='$del'";
$result=mysqli_query($con,$delete);
    header("location:farmer select.php");
?>
