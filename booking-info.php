<?php include('HotelConnection.php') ?>

<?php if(!isset($_SESSION['total'])) :?>
<?php header("location:index.php"); ?>
<?php endif ?>

<?php
unsetSession();
?>


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
			<h1> Payment </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Payment </span> </h4>
		</div>
	</div>

	<!-- Booking Profile -->
	<div>
		<div style="background-color: white; min-height: 350px;">
			<!-- <h2 align="center" style="padding-top: 20px;">Booked Information</h2> -->
			
			<!-- <form action="proceed-pay.php" method="post" onsubmit ="return isValid()" > -->
				<form  method="post" onsubmit ="return isValid()" > 
				<table align="center" class="table-style" border="0" width="" style=" padding: 0 30 30 30px;" cellspacing="10px">
					<tr>
						<td colspan="2"> 
							<h1> Booking Successful</h1>
						</td>
					</tr>
					<tr">
						<td style="font-weight: bold;""> Booking ID </td>
						<td> <?php echo $data[0]; ?> </td>
					</tr>
					<tr">
						<td style="font-weight: bold;""> Room Type </td>
						<td> <?php echo $data[1]; ?> </td>
					</tr>
					<tr>
						<td style="font-weight: bold;"> Check In Date</td>
						<td> <?php echo $data[2]; ?> </td>
					</tr>
					<tr>
						<td style="font-weight: bold;"> Check Out Date </td>
						<td> <?php echo $data[3]; ?> </td>
					</tr>
					<tr>
						<td style="font-weight: bold;"> Amount </td>
						<td> <?php echo $data[4]; ?> </td>
					</tr>	
				</table>
			</form>
		</div>
	</div>
</body>
</html>