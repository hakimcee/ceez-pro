<form action="" method="POST">
<?php
include "connection.php";
$upd = $_GET['upd'];
$select="SELECT * FROM payment WHERE payid='$upd'";
$sql=mysqli_query($con,$select);
while($rows=mysqli_fetch_assoc($sql)){
    ?>
            <label for=""><b>Quantity:</b></label><br><br>
            <input type="number" name="quantity" value="<?php echo $rows['quantity']?>"><br><br>
            <label for=""><b>Price Per_Unity:</b></label><br><br>
            <input type="number" name="punit" value="<?php echo $rows['price_per_unit']?>"><br><br>

    <?php
}
	
?>
<?php
include "connection.php";
if (isset($_POST['save'])) {
	$quantity = $_POST['quantity'];
	$punit = $_POST['punit'];
	$total = floatval($punit) * floatval($quantity);

	$update = "UPDATE payment SET quantity = '$quantity', price_per_unit = '$punit', total_payment = '$total',paydate = NOW() WHERE payid='$upd'";
	$result=mysqli_query($con,$update);
	header("location:paymentlist.php");
}

?>
<button type="submit" name="save"><b>SUBMIT</b></submit>
</form>