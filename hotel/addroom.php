<!DOCTYPE html>
<html lang="en">

<head>
    <title>Travego</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
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
height: 150px;
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
                            <li ><a href="adminhome.php">Home</a></li>
                            <li><a href="customers.php">Customers</a></li>
                            <li><a href="viewblogs.php">Blog</a></li>
                            <li class="active"><a href="managehotels.php">Hotels</a></li>
                            <li ><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-4" style="margin-top: 30px;"></div>

            <div class="col-md-4" style="margin-top: 30px;">

                <h2 style="text-align: center;">Add Room Details</h2>
                <form method="POST" action="addrooms.php" enctype="multipart/form-data">
                   
                   
                   <div class="col-xs-12">
                            <input class="form-control"  id="hid" name="hid" type="text" value="<?php echo $_GET['id'] ?>" readonly required hidden>
                          <label>Hotel Name</label>
                           <input class="form-control"  id="hname" name="hname" type="text" value="<?php echo $_GET['hname'] ?>" readonly required>
                       </div>
                      
               
                   
                    <div class="form-group">

                       <div class="col-xs-12">
                          <label>Room Number</label>
                           <input class="form-control"  id="roomnumber" name="roomnumber" type="text" placeholder="Enter Room Number"  required>
                       </div>
                     
                      
                       
                   </div>

                   <div class="form-group">

                       <div class="col-xs-12">
                          <label>Room Type</label>
                           <select class="form-control" name="type" id="type">
                               <option>Deluxe</option>
                               <option>Suit</option>
                               <option>Normal</option>
                           </select>
                         
                       </div>
                     
                      
                       
                   </div>
                   
                   <div class="form-group">

                       <div class="col-xs-12">
                          <label>No of Beds</label>
                           <select class="form-control" name="beds" id="beds">
                               <option>1 Bed</option>
                               <option>2 Bed</option>
                               <option>3 bed</option>
                           </select>
                         
                       </div>
                     
                      
                       
                   </div>
                   
                   
                  
                   
                   
                    <div class="form-group">

                       <div class="col-xs-12">
                          <label>Price Per Night</label>
                           <input class="form-control"  id="price" name="price" type="number" placeholder="Enter price " required>
                       </div>
                     
                      
                       
                   </div>
                   
                   
                   
                   
                    <div class="form-group">
                        <div class="col-xs-12">
                                    <label for="file">Image</label>
                                    <input type="file" class="form-control" name="file" id="file" required="">
                                </div>
                   
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-xs-12" style="text-align:center">
                            <br/>
                                     <button class="btn btn-info">Add</button>
                                </div>
                   
                    </div>

              
        
               </form>

                
               
            </div>

            <div class="col-md-4" style="margin-top: 30px;"></div>
        </div>
    </div>
    
    
    



    <div class="container-fluid">

       
        <div class="row">

            <div class="col-md-12">
                <hr />
                <p style="text-align: center;">Copy Rights All rights Reserved
                    <h3 style="text-align: center;">Travego Team</h3>
                </p>
                
            </div>
        </div>
        </div>

</body>

</html>