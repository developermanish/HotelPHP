<?php
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
?>


<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link href="img/logo.png" type="img/icon" rel="icon"/>
    </head>
    <body style="background-image: url('img/bg5.jpg'); width: 100%; height: 600px; background-repeat: no-repeat; background-size: cover; background-position-y: center; ">
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
                <div id="banner">
                    <div id="form" style="background:rgba(255,255,255,.5); width: 80%; margin-top:10%">
                        <form action="r1.php" method="post">
                            <table style="color: black; font-weight: 900;">
                                <?php
                                    $q1="select * from room where status='NotBooked'";
                                            $run=mysqli_query($a,$q1);
                                            $row=mysqli_fetch_array($run);
                                            $rno=$row['rno'];
                                            $q="select * from room where status='NotBooked'";
                                            $run=mysqli_query($a,$q);
                                            $num=mysqli_num_rows($run);
                                            
                                            if($r<=$num)
                                            {
                                ?>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" name="Status" value="available" disabled="disabled" title="Status"></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
                                    <td>ID no.</td>
                                    <td><input type="text" name="idno" placeholder="Enter ID" title="ID"></td>
                                </tr>
                                
                                <tr>
                                    <td>City</td>
                                    <td><select name="city">
                                        <option>--select--</option>
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>Lucknow</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td>District</td>
                                    <td><select name="dis">
                                        <option>--select--</option>
                                        <option>Mumbai</option>
                                        <option>Delhi</option>
                                        <option>Lucknow</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td>State</td>
                                    <td><select name="state">
                                        <option>--select--</option>
                                        <option>Maharashtra</option>
                                        <option>Delhi</option>
                                        <option>U.P</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td>Enter E-mail</td>
                                    <td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
                                </tr>
                                <tr>
                                    <td>Check-in date</td>
                                    <td><input type="text" name="ci"  value="<?php echo $ci;  ?>" title="Check in"></td>
                                    <td>Check out date</td>
                                    <td><input type="text" name="co"  value="<?php echo $co;  ?>" title="Check out"></td>
                                </tr>
                                <tr>
                                    <td>Enter Members</td>
                                    <td><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
                                </tr>
                                <td>
                                    <td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="submit"></td>
                                </td>

                            
                                <?php    }
                                    else
                                    {
                                        ?>
                                <tr>
                                    <td>Status</td>
                                    <td><input type="text" name="Status" value="Not - Available" disabled="disabled" title="Status"></td>
                                </tr>          
                                        <?php
                                    }
                                
                                ?>

                            </table>
                        </form>
                        <?php
                            if(isset($_POST['submit']))
                            {
                                $name = $_POST['name'];
                                $idno = $_POST['idno'];
                                $city = $_POST['city'];
                                $dis = $_POST['dis'];
                                $state = $_POST['state'];
                                $email = $_POST['email'];
                                $coin = $_POST['ci'];
                                $coout = $_POST['co'];
                                $m = $_POST['members'];

                                
                                $q="insert into form(name,city,dis,email,state,cidate,codate,m,id) value ('$name','$city','$dis','$email','$state','$coin','$coout','$m','$idno')";
                                $res=mysqli_query($a,$q);
                                
                                if($res)
                                {
                                    // echo "data insert";
                                    mysqli_query($a,"update room set status='Booked' where rno=$rno");
                                    header('Location:fi.php');
                                    
                                }
                                
                            }
                            else {
                                // echo "Not Clicked";
                            }
                        ?>
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>