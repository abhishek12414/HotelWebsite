<?php include('HotelConnection.php') ?>

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
			<h1> Room List </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Room List </span> </h4>
		</div>
	</div>

	<!-- Room List Information-->
	<div>
		<table cellspacing="0px" cellpadding="12px" border="0" class="table-style" align="center">

			<!-- 1st Room : Single Room-->
			<tr class="table-row-1">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/Single-Room.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>Single Room</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 6,423.05</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>


			<!-- 2nd Room : Double Room - With Sider -->
			<tr class="table-row-2">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/Double-Room-With-Sider.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>Double Room - With Sider</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 9,309.81</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>


			<!-- 3rd Room : Delux Room -->
			<tr class="table-row-1">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/Delux-Room.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>Delux Room</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 13,639.95</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>


			<!-- 4th Room : King Room -->
			<tr class="table-row-2">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/King-Room.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>King Room</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 15,805.03</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>


			<!-- 5th Room : Honeymoon Room -->
			<tr class="table-row-1">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/Honeymoon-Room.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>Honeymoon Room</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 20,856.86</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>


			<!-- 6th Room : Family Room-->
			<tr class="table-row-2">
				<!-- Room Image-->
				<td>
					<div>
						<img src="img/room/Family-Room.png" width="500px" height="auto">
					</div>
				</td>

				<!-- Room Information-->
				<td width="600px">
					<div>
						<h1>Family Room</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
						</p>
					</div>
				</td>

				<!-- Room Price-->
				<td width="150px" align="center">
					<div>
						<h2>Rs. 10,753.19</h2>
						<h3>PER NIGHT</h3>
						<a class="anchor-nostyle" href="booking-form.php"> <button class="button-style">Book Now</button></a>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>
</html>