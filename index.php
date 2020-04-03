<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="img/logo.png" type="img/icon" rel="icon"/>
    </head>
    <body>
        <div id="full">
            <div id="whole2" style="background-image: url('img/bg3.jpg'); width: 100%; height: 700px; background-repeat: no-repeat; background-size: cover; background-position-y: center; ">
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
                <div id="banner">

                </div>
            </div>    
            <div id="f1">
                <form action="r1.php" method="get">
                    <center>
                        <table>
                            <tr>
                                <th width="20%" height="50px">Destination</th>
                                <th width="20%" height="50px">Check In Date</th>
                                <th width="20%" height="50px">Check Out Date</th>
                                <th width="20%" height="50px">Room</th>
                                <td rowspan="2"><input type="submit" value="Check" name="sub"></td>
                            </tr>
                            <tr>
                                <td width="20%" height="50px"><center><input type="text" name="d1" placeholder="Enter Destination"></center></td>
                                <td width="20%" height="50px"><center><input type="date" name="ci"></center></td>
                                <td width="20%" height="50px"><center><input type="date" name="co"></center></td>
                                <td width="20%" height="50px">
                                    <center><select name="room">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select></center>
                                </td>
                            </tr>
                        </table>
                    </center>
                </form>
            </div>
            <div id="welcome">
                <h1 id="headingTwo">Welcome To Motel</h1>
                <p id="welcomeData">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br/> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,<br/> sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h2 style="color:red; text-align:center; margin-top:4%; margin-bottom:2%;">Our Brands</h2>
            </div>
            <div id="g1">
                <div id="one"><img src="img/hotel1.jpg" width="100%">
                    <center>
                        <h2>Taj</h2><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do eiusmod tempor incididunt ut <br/>sed do eiusmod tempor incididunt ut magna aliqua.</br>sed do eiusmod tempor incididunt ut magna aliqua</p>
                    </center>
                </div>
                <div id="two"><img src="img/hotel2.jpg" width="100%">
                    <center>
                        <h2>Vivanta</h2><br/>
                        <p>HOTEL AND RESTAURANT</p><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do eiusmod tempor incididunt ut <br/>sed do eiusmod tempor incididunt ut magna aliqua.</br>sed do eiusmod tempor incididunt ut magna aliqua</p>
                    </center>
                </div>
                <div id="three"><img src="img/hotel3.jpg" height="400px" width="100%">
                    <center>
                        <h2>Gateway</h2><br/>
                        <p>HOTEL AND RESTAURANT</p><br/>
                        <p>Lorem ipsum dolor sit amet, consectetur<br/> adipiscing elit, sed do eiusmod tempor incididunt ut <br/>sed do eiusmod tempor incididunt ut magna aliqua.</br>sed do eiusmod tempor incididunt ut magna aliqua</p>
                    </center>

                </div>
            </div>
        </div>
        <br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/><Br/><br/><Br/>
        <div class="footer">
            <center>Copyright 2020</center>
        </div>
    </body>
</html>