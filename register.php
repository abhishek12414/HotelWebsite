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
			<h1> Register </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Register </span> </h4>
		</div>
	</div>


	<div style="text-align: none; float: right; width: 100%">
		<table align="center" width="100%" border="0" style="padding-top: 2px;">
			<tr>
				<td align="center" width="800px">
					<img src="img/home/home-1.png" id="home" width="600px" height="auto"  style="margin-top: 30px;"></img>
					<br><br><br><br>
				</td>

				<td>
					<form action="register.php" method="post" onsubmit ="return isValidMobile()" >
						<!-- <label for="name" class="login-design">Name</label> -->
						<input type="text" name="name" id="name" class="login-design display-inline" placeholder="Name" required>
						
						<div class="login-design">
							<label for="gender">Gender</label>			
							<input type="radio" name="gender" id="genderMale" value="male" checked>Male
							<input type="radio" name="gender" id="genderFemale" value="female" >Female 
						</div>					
			
						<!-- <label for="mobile" class="login-design" style="margin-top: 8px;">Mobile No.</label> -->
						<input type="text" name="mobile" id="mobile" class="login-design display-inline" placeholder="Mobile No." required>
				
						<!-- <label for="email" class="login-design">Email</label>			 -->
						<input type="email" name="email" id="email" class="login-design display-inline" placeholder="Email"  required>
			
						<!-- <label for="password" class="login-design">Create a Password</label>			 -->
						<input type="password" name="password" id="password" class="login-design display-inline" placeholder="Password" required>

						<!-- <label for="confirmpassword" class="login-design">Confirm Your Password</label> -->
						<input type="password" name="confirmpassword" id="confirmpassword" class="login-design display-inline" placeholder="Re-Password" required onkeyup="isValid()">
			
						<!-- <label for="address" class="login-design disp-inherit-valign">Mailing Address</label> -->
						<textarea id="address" name="address" class="login-design display-inline" rows="3" placeholder="Address" required></textarea>
						
						<!-- <?php include('errors.php'); ?> -->
						<p class = "login-design display-inline" id="msg"></p>

						<input type="submit" value="Sign up" name="signup" id="submit" class="button-style display-inline" style="margin-left: 20px; width: 120px"> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="reset" value="Reset" class="button-style display-inline" style="width: 120px">
					</form>
				</td>
			</tr>
		</table>
	</div>


	<script>
		window.onload = setInterval('time()', 2000)
	
		function time() {
		    var d = new Date();
		    sec = d.getSeconds();
		    sec = (sec%3) + 1
		    // console.log(sec + "\n");
			document.getElementById("home").src = "img/home/home-" + sec + ".png";
		}


		var isValid = function() {				
			//ConfirmPassword Validation
			var password = document.getElementById('password').value;
			var confirmpassword = document.getElementById('confirmpassword').value;
			if( password != confirmpassword) {
				document.getElementById("msg").innerHTML = "Password not matched.";
				document.getElementById('submit').disabled = true;
			} else  {
				document.getElementById("msg").innerHTML = "";
				document.getElementById('submit').disabled = false;
			}
		}

		var isValidMobile = function() {
			//Mobile Validation
			var mobile = document.getElementById("mobile").value;
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