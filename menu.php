<?php 
	session_start();
	include('connection.php');
?>
<?php  
	$sql_br="SELECT * from menu where type='breakfast'";
	$res_br=mysqli_query($conn,$sql_br);
	$row_br=mysqli_fetch_all($res_br,MYSQLI_ASSOC);

	$sql_lu="SELECT * from menu where type='lunch'";
	$res_lu=mysqli_query($conn,$sql_lu);
	$row_lu=mysqli_fetch_all($res_lu,MYSQLI_ASSOC);

	$sql_di="SELECT * from menu where type='dinner'";
	$res_di=mysqli_query($conn,$sql_di);
	$row_di=mysqli_fetch_all($res_di,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
	<div align="center" style="padding-top: 50px;">
	<div><h1>Breakfast: </h1></div>
	<?php foreach ($row_br as $breakfast): ?>
		<div style="display: inline-block;">
			<h4>Name: <?php echo $breakfast['name']."<br>"; ?>
			Price: <?php echo $breakfast['price']."<br>"; ?></h4>
			<img src="<?php echo "images/".$breakfast['id'].".jpg"; ?>" width="300" height="300" style="vertical-align:middle;margin:0px 50px"><br><br>
			<form method="POST" action="cart.php">
			<button type="submit" name="add" value="<?php echo $breakfast['id']; ?>">Add item</button><br><br>
			</form><br>
		</div>
	<?php endforeach ?><br><br>
	<div><h1>Lunch: </h1></div>
	<?php foreach ($row_lu as $lunch): ?>
		<div style="display: inline-block;">
			<h4>Name: <?php echo $lunch['name']."<br>"; ?>
			Price: <?php echo $lunch['price']."<br>"; ?></h4>
			<img src="<?php echo "images/".$lunch['id'].".jpg"; ?>" width="300" height="300" style="vertical-align:middle;margin:0px 50px"><br><br>
			<form method="POST" action="cart.php">
			<button type="submit" name="add" value="<?php echo $lunch['id']; ?>">Add item</button><br><br>
			</form>
		</div>
	<?php endforeach ?><br><br>
	<div><h1>Dinner: </h1></div>
	<?php foreach ($row_di as $dinner): ?>
		<div style="display: inline-block;">
			<h4>Name: <?php echo $dinner['name']."<br>"; ?>
			Price: <?php echo $dinner['price']."<br>"; ?></h4>
			<img src="<?php echo "images/".$dinner['id'].".jpg"; ?>" width="300" height="300" style="vertical-align:middle;margin:0px 50px"><br><br>
			<form method="POST" action="cart.php">
			<button type="submit" name="add" value="<?php echo $dinner['id']; ?>">Add item</button><br><br><br><br>
			</form>
		</div>
	<?php endforeach ?><br><br>
	</div>
</body>
</html>