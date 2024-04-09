<a href="welcome.php">BACK</a>
<table border="1px">
<tr>
    <th>Id</th>
    <th>Farmer Name</th>
    <th>Id Number</th>
    <th>Crop Type</th>
    <th>Saeson Type</th>
    <th>quantity</th>
    <th>Cost Per Unit</th>
    <th>Total PAY </th>
    <th>Date Time</th>
    <th colspan="2">OPTION</th>
</tr>
<?php
        include "connection.php";
        $select="SELECT * FROM payment LEFT JOIN farmer ON farmer.farmid = payment.farmid";
        $y=1;
			$sql = mysqli_query($con,$select);
			while ($rows = mysqli_fetch_assoc($sql)) {
				?>
				<tr>
					<td><?php echo $y?></td>

                        <td> <?php echo $rows['farmername']?></td>
                        <td><?php echo $rows['idnumber']?></td>
                        <td><?php echo $rows['croptype']?></td>
                        <td><?php echo $rows['seasontype']?></td>
                        <td><?php echo $rows['quantity']?></td>	
                        <td><?php echo $rows['price_per_unit']?></td>
                        <td><?php echo $rows['total_payment']?></td>
                        <td><?php echo $rows['regdate']?></td>
                        <td><a href="delete.php?deli=<?php echo $rows['payid']?>">delete</a></td>
                        <td><a href="updatepaylist.php?upd=<?php echo $rows['payid']?>">UPDATE</a></td>
				</tr>
				<?php
				$y++;
                }
?>