<?php session_start(); 
include('connection.php'); ?>

	<?php if(isset($_POST['pay']) or isset($_POST['delete'])){
			$query="DELETE FROM cart";
			mysqli_query($conn,$query);
		}
	?>
	<?php 
		if(isset($_POST['pay'])){
			$sql="INSERT INTO payment(status) VALUES('Bill paid')";
		}
		if(isset($_POST['delete'])){
			$sql="INSERT INTO payment(status) VALUES('Order cancelled')";
		}
		$res=mysqli_query($conn,$sql);
	?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Exit</title>
 </head>
 <body>
 	<center>
 		<div style="padding-top: 150px">
	 		<div style="border: 3px solid green; padding: 35px 70px 50px;background-color: LightGreen;">
	 			<?php if (isset($_POST['pay'])): ?>
	 			<h3><?php echo "Hope you had a great meal..."."<br>"."Thank you!!...Please visit again."; ?></h3>
	 			<?php endif ?>
	 			<?php if (isset($_POST['delete'])): ?>
	 			<h3><?php echo "Your order has been cancelled..."."<br>"."Thank you!!...Please visit again."; ?></h3>
	 			<?php endif ?>
	 		</div>
 		</div>
 	</center>
 
 </body>
 </html>