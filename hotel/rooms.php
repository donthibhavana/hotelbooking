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
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <nav class="navbar navbar-default" style="margin-top: 25px;">
                    <div class="container-fluid">

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="deal.php">Deals</a></li>
                            <li><a href="login.html">Login</a></li>
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
                 <h2 style="text-align: center;">Rooms In <?php echo $_GET['hname'] ?></h2>
                 
                 
                 
                 <hr/>
                 
                
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                               
                             <th>Room Image</th>
                         <th>Room Number</th>
                            <th>Room Type</th>
                            
                            <th>No of Beds</th>
                            <th>Amount</th>
                           
                             <th>Action</th>
                           
                        </tr>
                     
                        <?php



                        include 'config.php';

                        $id=$_GET['id'];
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT room.rid,room.roomnumber,room.type,room.beds,room.image,room.price,hotel.hname FROM `room` join hotel on room.hid=hotel.hid where room.hid='$id'";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                 <td> <img src='" . $row['image'] . "' style='height:50px;width:50px'/></td>
                               
                           
                                    <td> " . $row['roomnumber'] . "</td>
                               
                                 <td> " . $row['type'] . "</td>
                                 <td> " . $row['beds'] . "</td>
                                <td> " . $row['price'] . "</td>
                             
                                 
                            
                                    <td>
                                    <button class='btn btn-warning' onclick='check()'>Book Now</button>
                                    
                                    </td>
                            
                                
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

            <div class="col-md-3">

            </div>
            <div class="col-md-3" style="text-align: center;">


                <ul style="list-style: none;margin-top: 20px;font-size: 16px;font-weight: bold;">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="deal.php">Deals</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3">

                <h3>Contact</h3>
                <p style="text-align: left;">
                Address : Travego<br/>
                Phone : +(123) 456 7890<br/>
                Email : travego@info.com<br/>
                </p>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                    <hr/>
                    <p style="text-align: center;">Copy Rights All rights Reserved</p>
                    <h3 style="text-align: center;">Travego Team</h3>
            </div>
        </div>

</body>

</html>