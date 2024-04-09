<a href="welcome.php">BACK</a>
<table border="1px">
    <th>Product Id</th>
    <th>Farmer Id</th>
    <th>Product Name</th>
    <th>Cost Per Unit</th>
    <th>OPTION</th>
        <?php
			include "connection.php";
			$select  = "SELECT * FROM product LEFT JOIN farmer ON product.farmid=farmer.farmid";
			$y=1;
			$sql = mysqli_query($con,$select);
			while ($rows = mysqli_fetch_assoc($sql)) {
				?>
				<tr>
					<td><?php echo $y?></td>
                        <td><?php echo $rows['farmername']?></td>
                        <td><?php echo $rows['pname']?></td>
                        <td><?php echo $rows['cost_per_unit']?></td>
                        <td><a href="viewproduct.php?deli=<?php echo $rows['pid']?>">delete</a></td>
				</tr>
				<?php
				$y++;
			}
			
		?> 
</table>