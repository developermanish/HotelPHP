<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<style>
        *{
    padding: 0;
    margin: 0;
}
body{
    background: url('./img/hotel3.jpg');
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
		<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
            <h1 style="color:black; font-wieght:900; text-align: center; "> Admin Panel</h1>
            <br/><br/><br/><br/>
			<div style="background-color: rgba(255,255,255,0.6);">
                <table>
                    <tr>
                        <th width="10%" height="50px">Name</th>
                        <th width="10%" height="50px">Id No.</th>
                        <th width="10%" height="50px">City</th>
                        <th width="10%" height="50px">District</th>
                        <th width="10%" height="50px">State</th>
                        <th width="10%" height="50px">Check In Date</th>
                        <th width="10%" height="50px">Check Out Date</th>
                        <th width="10%" height="50px">Member</th>
                    </tr>
                    <?php
                    $q1="select * from form";
                    $run=mysqli_query($a,$q1);
                    while($row=mysqli_fetch_array($run))
                    {
                        $name=$row['name'];
                        $idno=$row['id'];
                        $city=$row['city'];
                        $dis=$row['dis'];
                        $state=$row['state'];
                        $cidate=$row['cidate']; 
                        $codate=$row['codate']; 
                        $m=$row['m']; 
                    ?>

                    <tr>
                        <td width="10%" height="50px"><center><?php echo $name; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $idno; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $city; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $dis; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $state; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
                        <td width="10%" height="50px"><center><?php echo $codate; ?><center></td>
                        <td width="10%" height="50px"><center><?php echo $m; ?></center></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
		    </div>
            <center>
            
            </center>
        </div>
    </div>                
</body>

</html>