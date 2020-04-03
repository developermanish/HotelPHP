<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="img/logo.png" type="img/icon" rel="icon"/>
    </head>
    <body style="background-image: url('img/bg5.jpg'); width: 100%;  background-repeat: no-repeat; background-size: cover;  ">
        <div id="full">
            <div id="whole2">
                <div id="header">
                    <div id="nav">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="book.php">Book</a></li>
                            <li><a href="#">About Us</a></li>
                            
                        </ul>
                    </div>
                </div>
                
            </div> 
           
            <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>   
            <center>
            <center><h1 style="color:Black; font-weight:900; background:rgba(255,255,255,.5); width: 80%;">Book Your Room Now</h1></center>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/> 
                <div style="background:rgba(255,255,255,.5); width: 80%;">  
                    <form action="r1.php" method="get">          
                        <table>
                            <tr>
                                <th width="20%" height="50px">Destination</th>
                                <th width="20%" height="50px">Check In Date </th>
                                <th width="20%" height="50px">Check Out Date</th>
                                <th width="20%" height="50px">Room</th>
                                <td rowspan="2"><input type="submit" name="sub" value="Check"></td>
                            </tr>
                            <tr>
                                <td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
                                <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                                <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                                <td width="20%" height="50px">
                                    <center><select>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></center>
                                </td>
                            </tr>
                        </table>                
                    </form>
                </div>
            </center>
        </div>
    </body>
</html>