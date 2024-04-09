<?php
include "connection.php";
$del = $_GET["deli"];
$delete = "DELETE FROM payment WHERE payid='$del'";
$result=mysqli_query($con,$delete);
    header("location:paymentlist.php");
?>
