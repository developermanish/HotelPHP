<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home (Hotel Management)</title>
        <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
        <link href="img/LOGO.png" type="img/icon" rel="icon">
        <style>
            *{
    padding: 0;
    margin: 0;
}
body{
    background: url('./img/hotel5.jpg');
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
            <div id="bg" style="">
                <div class="header1" style="background-color:black;">			
                    <ul id="a1">
                        <li><a href="ahome.php">Home</a></li>
                        <li><a href="room.php">Room Update</a></li>
                        <li><a href="booking.php">Booking</a></li>
                        <li><a href="rd.php">Room Details</a></li>
                    </ul>
                </div>
                <div id="banner">
                    <center>
                        <div id="form1" style="background:rgba(255,255,255,.5); width: 80%; margin-top:10%;">
                        <br/><br/>
                            <h1>Add Room Details</h1>
                            <br/><br/><br/><br/><br/>
                            <form action="room.php" method="post">
                                <table style="color: black; font-weight:900">
                        
                                    <tr>
                                        <td>Room No</td>
                                        <td><input type="text" name="rno" placeholder="Enter Room No" title="Enter Room No"></td>
                                        
                                    </tr>
                                    
                                    <tr>
                                        <td>Room Type</td>
                                        <td><input type="text" name="type" placeholder="Enter Room Type" title="Enter Room Type"></td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Room Price</td>
                                        <td><input type="text" name="price" placeholder="Enter Room Price" title="Enter Room Price"></td>
                                        
                                    </tr>
                                    
                                    <td>
                                        <td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
                                    </td>
                                    
                                </table>
                            </form>
                            <?php
                            if(isset($_POST['submit']))
                            {
                                $rno=$_POST['rno'];
                                $type=$_POST['type'];
                                $p=$_POST['price'];
                                if(mysqli_query($a,"insert into room(rno,type,price) values('$rno','$type','$p')"))
                                {
                                    echo "Room added";
                                }
                                else
                                {
                                    
                                }
                            }

                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>