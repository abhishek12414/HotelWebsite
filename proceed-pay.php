<?php include('HotelConnection.php') ?>

<?php if(!isset($_SESSION['total'])) :?>
<?php header("location:index.php"); ?>
<?php endif ?>

<?php
if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
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
			<h2 align="center" style="padding-top: 20px;">Payment Process</h2>
			<table align="center" class="table-style" border="0" width="80%" style=" padding: 0 30 30 30px;">
				<tr style="font-weight: bold;">
					<td> Room Type </td>
					<td> Check In Date</td>
					<td> Check Out Date </td>
					<td> Amount </td>
				</tr>

				<tr>
					<td> <?php echo $_SESSION['room_type']; ?> </td>
					<td> <?php echo $_SESSION['check-in']; ?> </td>
					<td> <?php echo $_SESSION['check-out'] ?> </td>
					<td> <?php echo $_SESSION['total']; ?> </td>
				</tr>
			</table>
			<!-- <form action="proceed-pay.php" method="post" onsubmit ="return isValid()" > -->
				<form  method="post" onsubmit ="return isValid()" > 
				<table align="center" class="table-style" border="0" width="" style=" padding: 0 30 30 30px;" cellspacing="10px">
					<tr>
						<td> 
							<label for="name"><b>Name</b></label>
						</td>
						<td>
							<input type="text" name="name" id="name" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="cardnumber"><b>Card Number</b></label>
						</td>
						<td>
							<input type="text" name="cardnumber" id="cardnumber" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="expMonth"><b>Expiration Date</b></label>
						</td>
						<td>
							<input type="text" name="expMonth" id="expMonth" required style="width: 30px;">  /  
							<input type="text" name="expYear" id="expYear" required style="width: 60px;">
						</td>
					</tr>
					<tr>
						<td>
							<label for="ccv"><b>CCV</b></label>
						</td>
						<td>
							<input type="text" name="ccv" id="ccv" required style="width: 40px;">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="submitPayment" id="submitPayment" value="Pay Rs.<?php echo $_SESSION['total']; ?> ">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		function isValid() {
			var cardnumber = document.getElementById('cardnumber').value;
			if (isNaN(cardnumber)) {
				alert("Please enter valid Card No.");
				return false;
			}
			if(cardnumber.length != 16){
				alert("Please enter 16 digits Card No.");
				return false;
			}

			var expMonth = document.getElementById('expMonth').value;
			if (isNaN(expMonth) || (expMonth.length != 2) ){
				alert("Please enter 2 digits valid month");
				return false;
			}

			if((Number(expMonth) <1)  || (Number(expMonth) > 12)) {
				alert("Please enter valid month(1 to 12)");
				return false;
			}

			var expYear = document.getElementById('expYear').value;
			if (isNaN(expYear) || (expYear.length != 4)){
				alert("Please enter 4 digits valid year.");
				return false;
			}

			if((Number(expYear) <2017)) {
				alert("Please enter valid year > 2017");
				return false;
			}

			var ccv = document.getElementById('ccv').value;
			if (isNaN(ccv) || (ccv.length != 3)){
				alert("Please Enter 3 Digits Valid CCV No.");
				return false;
			}
		}
	</script>
</body>
</html>