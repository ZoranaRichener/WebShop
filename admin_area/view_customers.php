<table width="795" align="center" bgcolor="#FFE578">


	<tr align="center">
		<td colspan="6"><h2>View All Customers Here</h2></td>
	</tr>

	<tr align="center" bgcolor="#343D88" >
		<th style="color:white;">S.N</th>
		<th style="color:white;">Name</th>
		<th style="color:white;">Email</th>
		<th style="color:white;">Image</th>
		<th style="color:white;">Delete</th>
	</tr>
	<?php
		include("includes/db.php");

		$get_c = "select * from customers";

		$run_c = mysqli_query($con, $get_c);

		$i = 0;

		while ($row_c=mysqli_fetch_array($run_c)){

			$c_id = $row_c['customer_id'];
			$c_name = $row_c['customer_name'];
			$c_email = $row_c['customer_email'];
			$c_image = $row_c['customer_image'];
			$i++;

		?>
		<tr align="center">
			<td><?php echo $i;?></td>
			<td><?php echo $c_name;?></td>
			<td><?php echo $c_email;?></td>
			<td><img src="../customer/customer_images/<?php echo $c_image;?>" width="50" height="50"/></td>
			<td><a href="delete_c.php?delete_c=<?php echo $c_id;?>">Delete</a></td>

		</tr>
	<?php } ?>

</table>
