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
			<h1> Login </h1>
			<h4> <a href="index.php" class="anchor-style">Home</a>  /  <span class=" navigation-font-link"> Login </span> </h4>
		</div>
	</div>

	<div style="text-align: center; float: right; width: 100%">
		<table align="center" width="100%" border="0" style="padding-top: 8px;">
			<tr>
				<td align="center" width="800px">
					<img src="img/home/home-1.png" id="home" width="600px" height="auto"  style="margin-top: 30px;"></img>
					<br><br><br><br>
				</td>
				<td>
					<form action="login.php" method="post">
						<label class="login-design">Email</label>
						<input class="login-design" type="text" name="email" id="email" required>
						<label class="login-design">Password</label>
						<input class="login-design" type="password" name="password" id="password" required>
						<br>
						<input type="submit" name="btnLoginUser" class="button-login" value="Sign in">
						<input type="reset"  name="reset"  class="button-login" value="Reset">
						<br>
						<div style="font-size: 20px">Not yet a member? <a class="anchor-style" href="register.php">Sign up</a></div>
		
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
		
	</script>

</body>
</html>