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

                <h2 style="text-align: center;">Add Hotel Details</h2>
                <form method="POST" action="addhotels.php" enctype="multipart/form-data">
                   <div class="form-group row">

                       <div class="col-xs-12">
                           
                          <label>Country Name</label>
                           <?php
                            require_once('config.php');
                            $member_result = $conn->query('select * from country');
                            ?><select name="country" id="country" class="form-control"required>
                            <option value="">Select Country</option>
                            	<?php
                            	if ($member_result->num_rows > 0) {
                            		// output data of each row
                            		while($row = $member_result->fetch_assoc()) {
                            		?>
                            			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
                            			<?php
                            		}
                            	}
                            	?>
                            </select>
                       </div>
                      
               
                   </div>

                   <div class="form-group row">

                       <div class="col-xs-12">
                          <label>City Name</label>
                           
                          <?php
                            require_once('config.php');
                            $member_result = $conn->query('select * from city');
                            ?><select name="city_id" id="city_id" class="form-control" required>
                            <option value="">Select City</option>
                            	<?php
                            	if ($member_result->num_rows > 0) {
                            		// output data of each row
                            		while($row = $member_result->fetch_assoc()) {
                            		?>
                            			<option value="<?php echo $row["city_id"]; ?>"><?php echo $row["name"]; ?></option>
                            			<?php
                            		}
                            	}
                            	?>
                            </select>
                       </div>
                     
                      
                       
                   </div>
                   
                   
                   
                   
                   
                    <div class="form-group row">

                       <div class="col-xs-12">
                          <label>Hotel Name</label>
                           <input class="form-control"  id="hname" name="hname" type="text" placeholder="Enter hotel name"  required>
                       </div>
                     
                      
                       
                   </div>
                   
                    <div class="form-group row">

                       <div class="col-xs-12">
                          <label>Phone</label>
                           <input class="form-control"  id="phone" name="phone" type="text" placeholder="514-963-9812" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                       </div>
                     
                      
                       
                   </div>
                   
                    <div class="form-group row">

                       <div class="col-xs-12">
                          <label>Address</label>
                          <textarea class="form-control"  id="address" name="address" placeholder="Enter Complete Address"></textarea>
                          
                       </div>
                     
                      
                       
                   </div>
                   
                   
                   
                    <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" class="form-control" name="file" id="file" required="">
                                </div>
                   
                   

               <button class="btn btn-info">Add</button>
        
               </form>

                
               
            </div>

            <div class="col-md-4" style="margin-top: 30px;"></div>
        </div>
    </div>
    
    
    



    <div class="container-fluid">

        <hr/>
       
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