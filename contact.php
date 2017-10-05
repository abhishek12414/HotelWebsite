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
			<h1> Contact </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Contact </span> </h4>
		</div>
	</div>

	<!-- Contact Form -->
	<div>
		<form action="contact.php" method="post" onsubmit ="return isValidMobile()" >
			<table class="table-style" align="center" cellpadding="5px">
				<tr>
					<td colspan="2" align="center">
						<h1 class="h1-style">CONTACT US</h1>
					</td>
					<td rowspan="6" width="80px"></td>
					<td align="center">
						<h1 class="h1-style">GET IN TOUCH</h1>
					</td>
				</tr>

				<tr>
					<td>
						<label for="name" class="label-style">Name</label>
					</td>
					<td>
						<label for="phone-number" class="label-style">Phone</label>
					</td>
					<td rowspan="6">
						<!-- Contact Us sidebar -->
						<table cellspacing="20px" style="background-color: #fff">
							<tr> <td class="style-title">Address:</td> </tr>
							<tr> <td class="style-text">1234, ABC, XYZ</td> </tr>
							<tr> <td class="style-title">EMAIL:</td> </tr>
							<tr> <td class="style-text">EXAMPLE@EXAMPLE.COM, CONTACT@CONTACT.COM</td> </tr>
							<tr> <td class="style-title">WEB:</td> </tr>
							<tr> <td class="style-text">WWW.SITE.COM</td> </tr>
							<tr> <td class="style-title">PHONE:</td> </tr>
							<tr> <td class="style-text">+91 (330) 993-443 , +91 (330) 995-445</td> </tr>
							<tr> <td class="style-title">FAX:</td> </tr>
							<tr> <td class="style-text">+91 123456780</td> </tr>
						</table>
					</td>
				</tr>

				<tr>
					<td>
						<input type="text" class="input-style" name="name" id="name" placeholder="  Your Name" required>
					</td>
					<td>
						<input type="text" class="input-style" name="phone" id="phone-number" placeholder="  Phone" required>
					</td>
				</tr>

				<tr>
					<td>
						<label for="email" class="label-style">Email Address</label>
					</td>
					<td>
						<label for="subject" class="label-style">Subject</label>
					</td>
				</tr>

				<tr>
					<td>
						<input type="email" class="input-style" name="email" id="email" placeholder="  Your Email Address" required>
					</td>
					<td>
						<input type="text" class="input-style" name="subject" id="subject" placeholder="  Subject" required>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<label for="message" class="label-style">Message</label>
					</td>
				</tr>

				<tr>
					<td colspan="2">
						<textarea class="input-style textarea-style" name="message" placeholder="  Your Message..." id="message" class="textarea" rows="6"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="submit" class="button-style" name="contactus" value="Send Message">
					</td>
				</tr>
			</table>
		</form>
	</div>

	<script type="text/javascript">
		//Mobile Validation
		var isValidMobile = function() {
			var mobile = document.getElementById("phone-number").value;
			if (isNaN(mobile)) {
				alert("Please enter valid Contact No.");
				return false;
			}
			if(mobile.length != 10){
				alert("Please enter 10 digit Contact No.");
				return false;
			}
		}
	</script>
</body>
</html>