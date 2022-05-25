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
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="viewhotels.php">Hotels</a></li>
                            <li><a href="viewblogs.php">Blog</a></li>
                            <li><a href="mybookings.php">Bookings</a></li>
                            <li><a href="myprofile.php">Profile</a></li>
                            <li ><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
        
        
         <div class="row">
                 <div class="container">
                     
                    
                     
                 </div>
            
        </div>
        
        
        
    </div>

<div class="container">
        <div class="row">

             <div class="row">
                 
                  <div class="col-md-3">
                      <h3 style="text-align: left;">Filter</h3>
                      
                     
            <hr/>
            
            
             
                             
                        
                             <div class="col-md-12">
                                 <label for="rating" style="color:#9c9b9b;font-size:12px">Select Price</label>
                                    <br/>
                                    
                       <a href="search.php?country=<?php  echo $_GET['country'];  ?>&city=<?php echo $_GET['name'];?>"> <button class="btn btn-default form-control" style="margin-top:20px">High - Low</button></a>
                             </div>
                             
                             <div class="col-md-12">
                               
                            <a href="searchhotel.php?country=<?php  echo $_GET['country'];  ?>&city=<?php echo $_GET['name'];?>">      <button class="btn btn-default form-control" style="margin-top:20px" >Low - High</button>
                       </a>
                             </div>
                             
                             
                             
                             
                  
                      
                  </div>
            
            <div class="col-md-9">
                 <h3 style="text-align: left;">Recommended for you</h3>
                 
           
            
            <hr/>
            
             <div class="row">
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
                           
                           $c=$_GET['country'];
                           $n=$_GET['name'];
            
                            $sql = "SELECT * FROM `hotel` join city on hotel.city_id=city.city_id where city.country='$c' and city.name='$n'";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                                   <a style="text-align:center" href="viewrooms.php?id='. $row['hid'] .'&hname='. $row['hname'] .'">
                                   <img src="' . $row["image"] . '"  style="width:100%;height:200px"/></a>
                                    
                                    <h3 style="text-align:left">
                                    
                                     <a style="text-align:left" href="#">' . $row["hname"] . '</a>
                               
                                    </h3>
                                    
                                    <p style="text-align:left">
                                    
                                    Rating :  '. $row['rating'] .'
                                                                    <span class="fa fa-star checked"></span>
                                    <br/>
                                    Address: ' . $row["address"] . ' , ' . $row["country"] . '
                                    
                                    </p>
                                   
                                </div>
                              
                                
                            
                                ';
                                }
                            } else {
                                echo "No Hotel matches your search criteria please try again!";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
         </div>
                
            </div>
            
            
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