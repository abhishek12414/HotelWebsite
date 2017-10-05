<?php include('HotelConnection.php') ?>
<!-- <?php //unsetSession();?> -->

<?php if(!isset($_SESSION['userEmail'])) :?>
<?php header("location:login.php"); ?>
<?php endif ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>AB Group of Hotels</title>
	<link rel="stylesheet" type="text/css" href="myStyle.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>
<body class="body" onload="selectOption()">

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
			<h1> Booking Form </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> BookingForm </span> </h4>
		</div>
	</div>

	<!-- Booking Form -->
	<div>
		<form action="booking-form.php" method="post" onsubmit ="return isValidForm()" >
			<table align="center" class="table-style" border="0">
				<tr>
					<td colspan="2"><h1 class="header-color">BOOK ONLINE</h1> </td>
					<td room-type="17" width=20px></td>
					<td rowspan="17">
						<!-- Special offer sidebar -->
						<table>
							<tr>
								 <td align="center"> <h1 class="header-color">SPECIAL OFFERS</h1> </td>
							</tr>
							<tr>
								<td>
									<div class="price">										
										Rs. 6443.18 <span> / Night </span>										
									</div>
									<div class="price message">										
										<span> Family Room </span>										
									</div>
									<img src="img/special-offer/special1.jpeg" width="500px" height="auto">
									
								</td>
							</tr>
							<tr>
								<td>
									<div class="price">										
										Rs. 8339.00 <span> / Night </span>										
									</div>
									<div class="price message">										
										<span> Double Room </span>										
									</div>
									<img src="img/special-offer/special2.jpeg" width="500px" height="auto">
								</td>
							</tr>
							<tr>
								<td>
									<div class="price">										
										Rs. 12682.72 <span> / Night </span>										
									</div>
									<div class="price message">										
										<span> Delux Room </span>										
									</div>
									<img src="img/special-offer/special3.jpeg" width="500px" height="auto">
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td>
						<label for="name" class="label-style">Name</label>
					</td>
					<td>
						<label for="email" class="label-style">Email Address</label>
					</td>					
				</tr>

				<tr>
					<td>
						<input type="text" class="input-style" name="name" id="name" placeholder="  Your Name" required>
					</td>					
					<td>
						<input type="email" class="input-style" name="email" id="email" placeholder="  Your Email Address" required>
					</td>					
				</tr>

				<tr>
					<td>
						<label for="phone-number" class="label-style">Phone Number</label>
					</td>
					<td>
						<label for="country" class="label-style">Country</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="input-style" name="phoneno" id="phone-number" placeholder="  Your Phone Number" required>
					</td>					
					<td>
						<select class="selectbox-style" id="country" name="country" placeholder="  Select Your Country" required>
							<option value="India">India</option>
							<option value="Afganistan">Afghanistan</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Nepal">Nepal</option>
							<option value="Singapore">Singapore</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="New Zealand">New Zealand</option>				
							<option value="China">China</option>
							<option value="Switzerland">Switzerland</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label for="checkin" class="label-style">Check In</label>
					</td>
					<td>
						<label for="checkout" class="label-style">Check Out</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="input-style" name="check_in" placeholder="  Check In" id="checkin"  Depature Date" onfocus="(this.type='date')" required>
						<!--input type="date" name="checkin" id="arrival" placeholder="  Arrival Date"-->
					</td>
					<td>
						<input type="text" class="input-style" name="check_out" placeholder="  Check Out" id="checkout" onfocus="(this.type='date')" required>
						<!--input type="date" name="checkout" id="depature" placeholder="  Depature Date"-->
					</td>
				</tr>
				<tr>
					<td>
						<label for="adults" class="label-style">Adults</label>
					</td>
					<td>
						<label for="childrens" class="label-style">Childrens</label>
					</td>
				</tr>
				<tr>
					<td>
						<select class="selectbox-style" name="adults" required id="adults">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</td>
					<td>
						<select class="selectbox-style" name="childrens" required id="childrens">
							<option value="1">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label for="room-type" class="label-style">Room Type</label>
					</td>
				</tr>
				<tr>
					<td>
						<select id="room-type" class="selectbox-style" name="room_type" required>
							<option value="Single Room">Single Room</option>
							<option value="Double Room - With Sider">Double Room - With Sider</option>
							<option value="Delux Room">Delux Room</option>
							<option value="King Room">King Room</option>
							<option value="Honeymoon Room">Honeymoon Room</option>
							<option value="Family Room">Family Room</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<label for="your-comments" class="label-style">Your Comments</label>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<textarea class="input-style textarea-style" name="comments" placeholder="  Your Comments..." id="your-comments" class="textarea" rows="6"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" class="button-style" name="booking" id="booking" value="Proceed to pay">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<script type="text/javascript">
		//Mobile Validation
		var isValidForm = function() {
			var mobile = document.getElementById("phone-number").value;
			if (isNaN(mobile)) {
				alert("Please enter valid Contact No.");
				return false;
			}
			if(mobile.length != 10){
				alert("Please enter 10 digit Contact No.");
				return false;
			}

			var d = new Date();
			var date1 = new Date(document.getElementById("checkin").value);
			var date2 = new Date(document.getElementById("checkout").value);
			d.setHours(0,0,0,0);
			date1.setHours(0,0,0,0);
			date2.setHours(0,0,0,0);
			// alert(d + "\n" + date1 + "\n" + date2);

			if(date1 < d || date1 > date2) {
				alert("Please enter valid period");
				return false;
			}
		}

		function selectOption(){
			// alert(<?php //echo $_SESSION['room-index']?>);
			document.getElementById("room-type").options.selectedIndex = <?php echo $_SESSION['room-index']?>;
		}
	</script>
</body>
</html>