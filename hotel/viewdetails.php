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
        
                        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
                            <li><a href="home.php">Home</a></li>
                            <li class="active"><a href="viewhotels.php">Hotels</a></li>
                            <li><a href="viewblogs.php">Blog</a></li>
                            <li><a href="mybookings.php">Bookings</a></li>
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
            
            <div class="col-md-12">
                 <h3 style="text-align: left;">Complete Details</h3>
                 
           
            
            <hr/>
                
            </div>
            
            
        </div>
        
         <div class="row" style="margin:10px">
             
              <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
                           
                           $id=$_GET['id'];
            
                            $sql = "SELECT room.rid,room.roomnumber,room.type,room.beds,room.price,room.image,hotel.hname,hotel.rating,hotel.phone,hotel.address FROM `room` join hotel on room.hid=hotel.hid WHERE room.rid=$id";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                               <form method="GET" action="payment.php">
                              
                               <div class="col-md-6">
                                <input type="number" value="' . $row["rid"] . '"  id="rid" name="rid" hidden/>
                                  
                                   <img src="' . $row["image"] . '"  style="width:100%;height:300px"/>
                                    
                                    
                                   
                                </div>
                                
                                <div class="col-md-6">
                                
                                <h3 style="text-align:left">
                                    
                                     <a style="text-align:left">' . $row["hname"] . '</a>
                               
                                    </h3>
                                    
                                    <p style="text-align:left">
                                    
                                    Rating :  '. $row['rating'] .'
                                                                    <span class="fa fa-star checked"></span> <br/>
                                    Phone : ' . $row["phone"] . ' <br/>
                                    Address : ' . $row["address"] . '
                                    <br/>
                                    Room Type : ' . $row["type"] . '
                                    <br/>
                                    Beds : ' . $row["beds"] . '
                                    <br/>
                                    <input type="number" value="' . $row["price"] . '"  id="price" name="price" hidden/>
                                    Price Per Night : CAD ' . $row["price"] . ' $
                                    </p>
                                    
                                    <h3 style="text-align:left">
                                    
                                     <a>Your Stay</a></h3>
                                     
                                     <div class="col-md-6">
                                  <label for="checkin" style="color:#9c9b9b;font-size:12px">Check In</label>
                                    <br/>
                                    <input type="date" id="fromdate" name="fromdate" class="fromdate form-control" required>
                       
                                 </div>
                                 <div class="col-md-6">
                                     <label for="checkout" style="color:#9c9b9b;font-size:12px">Check Out</label>
                                        <br/>
                                        <input type="date" id="todate" name="todate" class="todate form-control" required>
                           
                                 </div>
                                 
                                 
                                 <div class="col-md-4">
                                 <br/>
                                    Total Days<br/>
                                <input class="calculated form-control" id="days" name="days" readonly/><br/>
                                 </div>
                                 <div class="col-md-4">
                                 <br/>
                                    Total Amount In $<br/>
                                <input class="tot form-control" id="tot" name="tot" readonly/><br/>
                                 </div>
                                 
                                 <div class="col-md-4">
                                
                                  <button class="btn btn-info" style="margin-top:40px">Confirm</button>
                                 </div>
                                
                                </div>
                              
                                </form>
                            
                                ';
                                }
                            } else {
                                echo "No Rooms Found please try again";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
                                        
                                                    
                                                    
                                                     
                                                  <script>
                                                      $('.fromdate').datepicker({
                                                    dateFormat: 'yy-mm-dd',
                                                    changeMonth: true,
                                                    changeYear: true,
                                                });
                                                $('.todate').datepicker({
                                                    dateFormat: 'yy-mm-dd',
                                                    changeMonth: true,
                                                    changeYear: true,
                                                });
                                                $('.fromdate').datepicker().bind("change", function () {
                                                    var minValue = $(this).val();
                                                    minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
                                                    $('.todate').datepicker("option", "minDate", minValue);
                                                    calculate();
                                                });
                                                $('.todate').datepicker().bind("change", function () {
                                                    var maxValue = $(this).val();
                                                    maxValue = $.datepicker.parseDate("yy-mm-dd", maxValue);
                                                    $('.fromdate').datepicker("option", "maxDate", maxValue);
                                                    calculate();
                                                });
                                                
                                                function calculate() {
                                                    var d1 = $('.fromdate').datepicker('getDate');
                                                    var d2 = $('.todate').datepicker('getDate');
                                                    var p =$("#price").val()
                                                    var oneDay = 24*60*60*1000;
                                                    var diff = 0;
                                                    if (d1 && d2) {
                                                  
                                                      diff = Math.round(Math.abs((d2.getTime() - d1.getTime())/(oneDay)));
                                                    }
                                                    $('.calculated').val(diff);
                                                     $('.tot').val(diff*p);
                                                  }
                                                  </script>
                                        
                                        </div>
                                        
                     <div class="row" style="margin:10px">
                         
                         <?php
                                        
                                         include 'config.php';
                           //SELECT `bid`, `country`, `name`, `image`, `dat`, `email` FROM `blog` WHERE 1
                           
                           $id=$_GET['id'];
            
                            $sql = "SELECT * FROM `images` where rid=$id";
                            $result = $conn->query($sql);
            
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                
                              
                              
                               <div class="col-md-2">
                
                                  
                                   <img src="' . $row["img"] . '"  style="width:100%;height:100px;magrin-top:20px"/>
                                    
                                    
                                   
                                </div>
                                
                               
                                
                            
                                ';
                                }
                            } else {
                                // echo "No Rooms Found please try again";
                            }
                            $conn->close();
            
            
                                        
                                        ?>
                         
                     </div> 
                     
                     
                     <div class="row">
                         <div class="col-md-12">
                             
                             <h3><a>Your stay includes</a></h3>
                             <hr/>
                         </div>
                         <div class="col-md-2" style="text-align:center">
                             <div class="well">
                                 <span class="glyphicon glyphicon-road"></span>
                                 Parking</div>
                         </div>
                          <div class="col-md-2" style="text-align:center">
                              <div class="well">
                                 <span class="glyphicon glyphicon-equalizer"></span>
                                 Wifi</div>
                         </div>
                         <div class="col-md-2" style="text-align:center">
                              <div class="well">
                                 <span class="glyphicon glyphicon-glass"></span>
                                 Bar</div>
                         </div>
                         <div class="col-md-2" style="text-align:center">
                              <div class="well">
                                 <span class="glyphicon glyphicon-ok"></span>
                                 Elevator</div>
                         </div>
                          <div class="col-md-2" style="text-align:center">
                              <div class="well">
                                 <span class="glyphicon glyphicon-ok"></span>
                                 Air Conditioning</div>
                         </div>
                         <div class="col-md-2" style="text-align:center">
                              <div class="well">
                                 <span class="glyphicon glyphicon-ok"></span>
                                 Room Service</div>
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