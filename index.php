<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
</head>
<body>
	<h2> Inventory management system</h2>
	<a href="products/addproduct.php">Add new product</a>
	<table>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Description</td>
		    <td>View</td>
		    <td>Edit</td>
		    <td>Delete</td>

		</tr>
		<?php
		include 'db.php';
		$stmt=$dbcon->prepare("SELECT * FROM products");
		$stmt-> execute();
		while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			?>
			<tr>
			<td><?php echo $pid; ?></td>
			<td><?php echo $pname; ?></td>
			<td><?php echo $pdescs; ?></</td>
			<td><a href="pview.php?id=<?php echo $pid; ?>">View</a></td>
			<td><a href="products/edit.php">Edit</td>
			<td><a href="products/delete.php">Delete</a></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>

