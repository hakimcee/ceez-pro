
<a href="welcome.php">BACK</a>
<table border="1px">
<tr>
    <th><b>Farmer Id</b></th>
    <th><b>Farmer Name</b></th>
    <th><b>Id Number</b></th>
    <th><b>Season Type</b></th>
    <th><b>Crop Type</b></th>
    <th><b>quantity</b></th>
    <th><b>Register Date</b></th>
    <th colspan="2"><b>OPTION</b></th>
</tr>
<?php
$con = mysqli_connect('localhost','root','','xy_scheme');
include "connection.php";
			$select  = "SELECT * FROM farmer";
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
                        <td><a href="product.php?fid=<?php echo $rows['farmid']?>">Add Product</a></td>
                        <td><a href="farm delete.php?deli=<?php echo $rows['farmid']?>">delete</a></td>

				</tr>
				<?php
				$y++;
			}
			
		?>