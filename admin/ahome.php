<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="./css/style.css"> -->
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<style>
		*{
    padding: 0;
    margin: 0;
}
body{
    background: url('./img/hotel2.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position-y: center; */
    background-size: 100%;
    height: 100%;

}
#full{
    width: 100%;
    height: auto;
}
.header1{
    width: 100%;
    height: 100px;
    background-color: black;
    /* position: sticky; */
}


ul li{
    float: left;
    list-style: none;
    width: 14%;
    height: 50px;
    line-height: 70px;
    text-align: center;
}
a{
    text-decoration: none;
    color: white;
}



	</style>
	
</head>
<body>
	<div id="full">
		<div>
			<div class="header1" style="background-color:black">			
				<ul id="a1">
					<li><a href="ahome.php">Home</a></li>
					<li><a href="room.php">Room Update</a></li>
					<li><a href="booking.php">Booking</a></li>
					<li><a href="rd.php">Room Details</a></li>
				</ul>
			</div>
			<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
				<h1 style="color:black;text-align: center; background:rgba(255,255,255,.5); width: 100%;">Welcome to Admin panel</h1>
			</div>
		
	</div>
  </div>
</body>

</html>