<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
    <style>
            *{
    padding: 0;
    margin: 0;
}
body{
    background: url('./img/hotel4.jpg');
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
#banner{
    width: 100%;
    height: 400px;   
}

#form
{
	width: 600px;
	padding-top: 150px;
	height: auto;
}
td
{
	width: 300px;
	height: 50px;
}

        </style>
	
</head>
<body>
	<div id="full">
        <div class="header1" style="background-color:black">			
            <ul id="a1">
                <li><a href="ahome.php">Home</a></li>
                <li><a href="room.php">Room Update</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="rd.php">Room Details</a></li>
            </ul>
        </div>
		<div id="banner"><br><br><br><br><br><br>
            <h1 style="color:black; font-wieght:900; text-align: center; "> Admin Panel</h1>
            <br><br><br><br><br>
			<div style="background-color: rgba(255,255,255,0.6);">
                <table>
                    <tr>
                        <th width="10%" height="50px">Room No</th>
                        <th width="10%" height="50px">Room Type</th>
                        <th width="10%" height="50px">Price</th>
                        <th width="10%" height="50px">Status</th>
                        <th width="10%" height="50px">Option</th>
                    </tr>
                    <?php
                    $q1="select * from room";
                    $run=mysqli_query($a,$q1);
                    while($row=mysqli_fetch_array($run))
                    {
                        $rno=$row['rno'];
                        $type=$row['type'];
                        $price=$row['price'];
                        $status=$row['status'];
                    
                    ?>
                    <tr>
                        <td width="10%" height="50px"><center><?php echo $rno; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $type; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $price; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $status; ?></center></td>
                        <td width="10%"><center><a style="color: blue" href="co.php? rno=<?php echo $rno; ?>" >Check Out</a></center> </td>
                    </tr>
                    <?php
                }
                    ?>
                </table>
	    	</center>
		</div>
        <center>
        
        </center>
	</div>
  </div>
</body>

</html>