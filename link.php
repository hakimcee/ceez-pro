<table border="1px">
<tr>
    <th>Farmer Id</th>
    <th>Farmer Name</th>
    <th>Id Number</th>
    <th>Crop Type</th>
    <th>Saeson Type</th>
    <th>quantity</th>
    <th>Register Date</th>
    <th>Product Id</th>
    <th>Farmer ID</th>
    <th>Cost Per Unit</th>
    <th>Total Price</th>
</tr>
<?php
        include "connection.php";
        $select="SELECT * FROM farmer LEFT JOIN product ON farmer.farmid = product.farmid";
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
                        <td><?php echo $rows['regdate']?></td>
                        <td><?php echo $y?></td>
                        <td><?php echo $rows['farmid']?></td>
                        <td><?php echo $rows['pname']?></td>
                        <td><?php echo $rows['cost_per_unit']?></td>

					
					<!-- <td><a href="pay.php?fid=<?php echo $rows['farmid']?>">PAY</a></td> -->

				</tr>
				<?php
				$y++;
                }
?>
</table>