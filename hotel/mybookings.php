<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .navbar-default {
            background-color: #fff;
            border-color: #fff;
        }

        .navbar-default .navbar-nav>.active>a,
        .navbar-default .navbar-nav>.active>a:focus,
        .navbar-default .navbar-nav>.active>a:hover {
            color: #fff;
            background-color: #4b93de;
        }

        .navbar-default .navbar-nav>li>a {
            color: #000;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="background-image: url('images/bg1.png'); display: block;
height: 400px;
width: 100%; background-repeat: no-repeat;
    background-size: cover;">
       <div class="row">

            <div class="col-md-3" style="text-align: center;">
                <img src="images/logo.jpg" style="width: 100px;" />
            </div>
            <div class="col-md-3">

            </div>
            <div class="col-md-5">
                <nav class="navbar navbar-default" style="margin-top: 25px;">
                    <div class="container-fluid">

                        <ul class="nav navbar-nav">
                            <li ><a href="home.php">Home</a></li>
                            <li><a href="viewhotels.php">Hotels</a></li>
                             <li><a href="viewdeals.php">Deals</a></li>
                            <li ><a href="viewblogs.php">Blog</a></li>
                            <li class="active"><a href="mybookings.php">Bookings</a></li>
                            <li><a href="myprofile.php">Profile</a></li>
                            <li ><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>

<div class="container">
        <div class="row">

             <div class="row">
            
           
            
            
        </div>
        
        
            
                </div>
                
                 <div class="row">
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">My Bookings</h2>
                 
                 
                 
                 <hr/>
                 
                
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                               
                             <th>Hotel Image</th>
                             <th>Address</th>
                         <th>Payment Id</th>
                            <th>Check In</th>
                            
                            <th>Check Out</th>
                            <th>Room Number</th>
                            <th>Type</th>
                            <th>Beds</th>
                            <th>Amount</th>
                             <th>Status</th>
                           
                        </tr>
                     
                        <?php
                        session_start();


                        include 'config.php';

                         $email=$_SESSION["email"];
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT bookings.payment_id,bookings.status,bookings.checkin,bookings.checkout,bookings.days,bookings.total,room.roomnumber,room.type,room.beds,hotel.rating,hotel.phone ,hotel.hname,hotel.image,hotel.address FROM `bookings` JOIN room on bookings.rid=room.rid JOIN hotel on room.hid=hotel.hid where bookings.email='$email'";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                 <td> <img src='" . $row['image'] . "' style='height:50px;width:50px'/>
                                 <br/>
                                 " . $row['hname'] . "
                                 </td>
                                 <td> " . $row['address'] . "</td>
                               
                           <td> " . $row['payment_id'] . "</td>
                                    <td> " . $row['checkin'] . "</td>
                               
                                
                                 <td> " . $row['checkout'] . "</td>
                                  <td> " . $row['roomnumber'] . "</td>
                                 <td> " . $row['type'] . "</td>
                                 <td> " . $row['beds'] . "</td>
                                 <td>CAD " . $row['total'] . " $</td>
                                <td>  " . $row['status'] . "</td>
                             
                                 
                            
                                  
                                
                                </tr> ";
                            }
                        } else {
                            echo "No Rooms Found";
                        }
                        $conn->close();
                        ?>
                     
                </table>
                
                <script>
                                
                                function check()
                                {
                                    alert("Please Login to Continue Booking");
                                }
                                
                                
                                </script>
                
            </div>
            
            
        </div>
                </div>




    <div class="container-fluid">
       
        <div class="row">

            <div class="col-md-12">
                    <hr/>
                    <p style="text-align: center;">Copy Rights All rights Reserved</p>
                    <h3 style="text-align: center;">Travego Team</h3>
            </div>
        </div>

</body>

</html>