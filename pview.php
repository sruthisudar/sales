<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>
	<?php
	include 'db.php';
	if (isset($_GET['id']))
	{
		$id=$_GET['id'];
		$stmt=$dbcon->prepare("SELECT * FROM products WHERE pid=$id");
		$stmt-> execute();
		$row=$stmt->fetch(PDO::FETCH_ASSOC))
			extract($row);
			?>
			
			<h1><?php echo $pname; ?></h1>
			<p><?php echo $pdescs; ?></</p>
			

			<?php
	}
	?>
</body>
</html>



