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

	<div align="center">
		<iframe src="img/home/home-1-1.png" name="hotel-frame" width="1200px" height="500px" scrolling="no"></iframe>
		<!--img src="img/room/room-1.png" width=800px height="auto"-->
	</div>


	<div align="center">
		<a href="img/home/home-1-1.png" target="hotel-frame">
			<img src="img/home/home-1-1.png" width=200px height="auto">
		</a> &nbsp;&nbsp;&nbsp;

		<a href="img/home/home-2-2.png" width="100%" height="auto" target="hotel-frame">			
			<img src="img/home/home-2-2.png" width=200px height="auto">
		</a> &nbsp;&nbsp;&nbsp;

		<a href="img/home/home-3-3.png" width="100%" height="auto" target="hotel-frame">
			<img src="img/home/home-3-3.png" width=200px height="auto">
		</a>
	</div>

	<div class="div-margin-left-right">
		<table class="table-style table-row-1" cellpadding="30px" cellspacing="5px" border="0">
			<tr>
				<td rowspan="2" width="500px" class="table-row-1">
					<h1>About AB Group of Hotels</h1>
					<p align="justify">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
					</p>
				</td>
				<td colspan="3" class="table-row-2">
					<!--h1>Our Favorite Rooms</h1-->
					<h1>Our Special Offers</h1>
					<p align="justify">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
					</p>
				</td>							
			</tr>

			<tr class="table-row-2">
				<td>
					<div class="price">										
						Rs. 6443.18 <span> / Night </span>										
					</div>
					<img src="img/special-offer/special1.jpeg" width="250px" height="auto">
					<div class="price message1">
						<span> Family Room </span>
					</div>
				</td>
				<td>
					<div class="price">										
						Rs. 8339.00 <span> / Night </span>										
					</div>
					<img src="img/special-offer/special2.jpeg" width="250px" height="auto">
					<div class="price message1">										
						<span> Double Room </span>										
					</div>
				</td>
				<td>
					<div class="price">										
						Rs. 12682.72 <span> / Night </span>										
					</div>
					<img src="img/special-offer/special3.jpeg" width="250px" height="auto">						
					<div class="price message1" align="center">
						<span> Delux Room </span>										
					</div>
				</td>
			</tr>
		</table>
	</div>
	
	<!-- Services -->
	
	<div class="div-margin-left-right table-style table-row-2" align="center" style="margin-bottom: 0px">
		<table cellpadding="30px" border="0">
			<tr class="table-row-2">
				<td colspan="3" align="center">
					<h1>Our Awesome Services</h1>
					<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.
					</p>
				</td>
			</tr>

			<tr class="table-row-2">
				<td width="50%" rowspan="3"> 
					<iframe src="img/services/service-2-550.png" name="services-iframe" width="600px" height="460px" scrolling="no" frameborder="0" style="border-radius: 10px"></iframe>
				</td>
				
				<td>
					<div class="table-row-1">
					<table cellpadding="5px" border="0">
						<tr class="table-row-1">							
							<td >
								<a class="anchor-nostyle" href="img/services/service-2-550.png" target="services-iframe">
								<img src="img/icons/conference.png" width="50px" height="50px">
								</a>
							</td>
														
							<td>
								<div>
									<a class="anchor-nostyle" href="img/services/service-2-550.png" target="services-iframe">			
									<h2>Conference Room</h2>
									<p align="justify">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
									</p>
									</a>
								</div>
							</td>							
						</tr>
						
						<tr><td colspan="2"><hr></td></tr>

						<tr class="table-row-1">
							<td>
								<a class="anchor-nostyle" href="img/services/service-1-550.png" target="services-iframe">
								<img src="img/icons/restaurant.png" width="50px" height="50px">
								</a>
							</td>
							<td>							
								<div>
									<a class="anchor-nostyle" href="img/services/service-1-550.png" target="services-iframe">
									<h2>Restaurant</h2>
									<p align="justify">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
									</p>
									</a>
								</div>
							</td>
						</tr>

						<tr><td colspan="2"><hr></td></tr>
						
						<tr class="table-row-1">							
							<td>
								<a class="anchor-nostyle" href="img/services/service-3-550.png" target="services-iframe">
								<img src="img/icons/swmming-pool.png" width="50px" height="50px">
								</a>
							</td>
							<td>
								<div>
									<a class="anchor-nostyle" href="img/services/service-3-550.png" target="services-iframe">
									<h2>Swimming Pool</h2>
									<p align="justify">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
									</p>
									</a>
								</div>
							</td>
						</tr>
					</table>
					</div>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>