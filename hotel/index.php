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
        
        	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
        
        
         <div class="row">
                 <div class="container">
                     
                     <div class="row" style="height:80px;background-color:white;margin-top:90px;padding:10px;border-radius:10px">
                         <form method="GET" action="index1.php">
                             
                             <div class="col-md-3">
                                  <label style="color:#9c9b9b;font-size:12px">Country Name</label>
                                           
		                    <select class="form-control" id="country" name="country">
		                    	<option selected="" disabled="">Select Country</option>
		                    	<?php 
		                    		require 'data.php';
		                    		$country = loadAuthors();
		                    		foreach ($country as $countrys) {
		                    			echo "<option id='".$countrys['id']."' value='".$countrys['id']."'>".$countrys['name']."</option>";
		                    		}
		                    	 ?>
		                    </select>
                             </div>
                             <div class="col-md-3">
                                 
                                 <label style="color:#9c9b9b;font-size:12px">City Name</label>
                           
                                         
                                          <select class="form-control" id="name" name="name"></select>
                                         
                                         	<script type="text/javascript">
                                        		$(document).ready(function(){
                                        			$("#country").change(function(){
                                        				var aid = $("#country").val();
                                        				$.ajax({
                                        					url: 'data.php',
                                        					method: 'post',
                                        					data: 'aid=' + aid
                                        				}).done(function(books){
                                        					console.log(books);
                                        					books = JSON.parse(books);
                                        					$('#name').empty();
                                        					books.forEach(function(book){
                                        						$('#name').append('<option>' + book.name + '</option>')
                                        					})
                                        				})
                                        			})
                                        		})
                                        	</script>
                        
                             </div>
                            
                             
                             <div class="col-md-3">
                                 <label for="checkout" style="color:#9c9b9b;font-size:12px">Select Room</label>
                                    <br/>
                                    <select class="form-control" name="type" id="type" required>
                                           <option>Deluxe</option>
                                           <option>Suit</option>
                                           <option>Normal</option>
                                           <option>Single</option>
                                       </select>
                       
                             </div>
                             
                             <div class="col-md-3">
                                  <button class="btn btn-primary form-control" style="margin-top:20px" >Search</button>
                       
                             </div>
                             
                             
                             
                             
                             
                             
                         </form>
                         
                     </div>
                     
                 </div>
            
        </div>
        
        
        
    </div>

<div class="container">
        <div class="row">

             <div class="row">
            
            <div class="col-md-12">
                 <h3 style="text-align: left;">Traveller's Choice: Top Hotels</h3>
                 
           
            
            <hr/>
                
            </div>
            
            
        </div>
        
         <div class="row">
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
            
                            $sql = "SELECT * FROM `hotel` join city on hotel.city_id=city.city_id order by hid";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-3">
                
                                   <a style="text-align:center" href="rooms.php?id='. $row['hid'] .'&hname='. $row['hname'] .'">
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
                                echo "No Blogs Found please add Blogs";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
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