<?php include('HotelConnection.php') ?>

<?php if(!isset($_SESSION['userEmail']) && $_SESSION['userEmail'] != "admin@gmail.com") :?>
<?php header("location:index.php"); ?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>AB Group of Hotels</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body class="body">

	<!-- Company Logo and Menu Items -->
	<div class="menu-area" >
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="index.php"><img class ="company-logo" src="img/company-logo/Abhi-40.png" width="40px" height="auto"></a>		
		
		&nbsp;&nbsp;&nbsp;&nbsp;
		<label class="company-name">AB Group of Hotels</label> 
		<span class="user">
			<?php if (isset($_SESSION['name'])) : ?>
				<?php echo "Welcome " . $_SESSION['name'];?>
			<?php endif?>

			<a class="anchor-style" href= "<?php profileLink() ?>"> <?php echo (isset($_SESSION['name'])) ? "(Profile)" : ""; ?></a>
		</span>
			&nbsp;&nbsp;&nbsp;&nbsp;
		<br>
		
		<div align="right" style="font-size: 20px" position=absolute style="top: 10px; right:10px; ">
			<a class="anchor-style" href="index.php" value="check">Home</a> &nbsp;&nbsp;&nbsp;
			<a class="anchor-style" href="room-list.php">Rooms & Tariff</a> &nbsp;&nbsp;&nbsp;
			<a class="anchor-style" href="gallery.php">Gallery</a> &nbsp;&nbsp;&nbsp;
			<a class="anchor-style" href="contact.php">Contact</a> &nbsp;&nbsp;
			<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Online</button> </a>

			<form action="index.php" method="post" style="display: inline-block;">
				<input class="button-style" type="submit" value="<?php checklogin() ?>"	name="<?php checklogin() ?>">
			</form>

		</div>
	</div>

	<!-- Navigation View -->
	<div id="title-area">
		<div id="naviagation-view">
			<h1> Profile </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Profile </span> </h4>
		</div>
	</div>

	<!-- Booking Profile -->
	<div>
		<div style="background-color: white; min-height: 350px;">
			<table align="center" class="table-style" border="0" width="100%" style=" padding: 20px;">
				<caption><h3>Booking History</h3></caption>
				<thead>
					<tr style="font-weight: bold;">
						<td>Booking ID</td> <td>Booking Date</td> <td>Name</td> <td>Email</td> <td>Mobile No.</td> <td>Country</td> <td>Check In</td> <td>Check Out</td> <td>Adults</td> <td>Childrens</td> <td>Room Type</td> <td>Amount</td><td>Comments</td>
					</tr>
				</thead>
				<tbody>
					<?php
						$result = bookingHistory();
						while($row =mysqli_fetch_assoc($result)) {
							echo
							"<tr>
								<td>{$row['id']}</td>
								<td>{$row['booking_date']}</td>
								<td>{$row['name']}</td>
								<td>{$row['email']}</td>
								<td>{$row['mob']}</td>
								<td>{$row['country']}</td>
								<td>{$row['check_in']}</td>
								<td>{$row['check_out']}</td>
								<td>{$row['adults']}</td>
								<td>{$row['childrens']}</td>
								<td>{$row['room_type']}</td>
								<td>{$row['total_amount']}</td>
								<td>{$row['comments']}</td>									
							<tr>\n";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>