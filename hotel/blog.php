<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li  class="active"><a href="blog.php">Blog</a></li>
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
            
            <div class="col-md-12">
                 <h3 style="text-align: left;">Customer Expriences</h3>
                 
           
            
            <hr/>
                
            </div>
            
            
        </div>
        
         <div class="row">
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                            $sql = "SELECT * FROM blog";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                                   <a style="text-align:center" href="blogdetails.php?id='. $row["bid"] .'">
                                   <img src="' . $row["image"] . '"  style="width:100%;height:200px"/></a>
                                    
                                    <h3 style="text-align:left">
                                    
                                     <a style="text-align:left" href="#">' . $row["country"] . '</a>
                               
                                    </h3>
                                    
                                    <p style="text-align:left">
                                    
                                    Destination Name : ' . $row["country"] . ' <br/>
                                    Posted Date : ' . $row["dat"] . '
                                    
                                    </p>
                                   
                                </div>
                              
                                
                            
                                ';
                                }
                            } else {
                                echo "No Blogs Found please add Blogs";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
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