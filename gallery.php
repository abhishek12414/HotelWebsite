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
			<h1> Gallery </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Gallery </span> </h4>
		</div>
	</div>

	<div>
		<table align="center" class="table-style">
			<tr>
				<td>
					<div class="table-row-1">
						<table cellpadding="30px" align="center" border="0">
							<tr align="center">
								<td>
									<img src="img/gallery/gallery1.jpg" width="356px" height="225px"> <br>
									<h1>Swimming Pool</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery2.jpg" width="356px" height="225px"> <br>
									<h1>Swimming Pool</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery3.jpg" width="356px" height="225px"> <br>
									<h1>Restaurant</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="table-row-2">
						<table cellpadding="30px" align="center" border="0">
							<tr align="center">
								<td>
									<img src="img/gallery/gallery4.jpg" width="356px" height="225px"> <br>
									<h1>Restaurant</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery5.jpg" width="356px" height="225px"> <br>
									<h1>Room Service</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery6.jpg" width="356px" height="225px"> <br>
									<h1>Restaurant</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="table-row-1">
						<table cellpadding="30px" align="center" border="0">
							<tr align="center">
								<td>
									<img src="img/gallery/gallery7.jpg" width="356px" height="225px"> <br>
									<h1>Zakynthos</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery8.jpg" width="356px" height="225px"> <br>
									<h1>Zakynthos</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery9.jpg" width="356px" height="225px"> <br>
									<h1>Beach</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>

			<tr>
				<td>
					<div class="table-row-2">
						<table cellpadding="30px" align="center" border="0">
							<tr align="center">
								<td>
									<img src="img/gallery/gallery10.jpg" width="356px" height="225px"> <br>
									<h1>Boat</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery11.jpg" width="356px" height="225px"> <br>
									<h1>Spa</h1>
									<p>Lorem ipsum dolor sit amet</p>
								</td>
								<td>
									<img src="img/gallery/gallery12.jpg" width="356px" height="225px"> <br>
									<h1>Swimming Pool</h1>
									<p>Lorem ipsum dolor sit amet</p>
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