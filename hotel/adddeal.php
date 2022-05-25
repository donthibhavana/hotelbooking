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

                <h2 style="text-align: center;">Add Deals</h2>
                <form method="POST" action="adddeals.php" enctype="multipart/form-data">
                   
                   
                   
                   
                   
                   <div class="col-xs-12">
                           
                          <label>Hotel Name</label>
                        
                           <?php
                            require_once('config.php');
                            $member_result = $conn->query('select * from hotel');
                            ?><select name="hid" id="hid" class="form-control">
                            <option value="">Select Hotel</option>
                            	<?php
                            	if ($member_result->num_rows > 0) {
                            		// output data of each row
                            		while($row = $member_result->fetch_assoc()) {
                            		?>
                            			<option value="<?php echo $row["hid"]; ?>"><?php echo $row["hname"]; ?></option>
                            			<?php
                            		}
                            	}
                            	?>
                            </select>
                       
                       
                       </div>
                       
                       
                        <div class="form-group">

                       <div class="col-xs-12">
                          <label>Season</label>
                           <select class="form-control" name="season" id="season">
                               <option>Summer</option>
                               <option>Winter</option>
                               <option>Spring</option>
                           </select>
                         
                       </div>
                     
                      
                       
                   </div>
                   
                   <div class="form-group">

                       <div class="col-xs-12">
                          <label>Stay</label>
                           <select class="form-control" name="stay" id="stay">
                               <option>1 Night</option>
                               <option>2 Nights</option>
                               <option>3 Nights</option>
                               <option>5 Nights</option>
                           </select>
                         
                       </div>
                     
                      
                       
                   </div>
                   
                   
                      
               
                   
                    <div class="form-group">

                       <div class="col-xs-12">
                          <label>Amount</label>
                           <input class="form-control"  id="amount" name="amount" type="number" placeholder="Enter amount"  required>
                       </div>
                     
                   </div>

                  
                  
                   
                   
                    <div class="form-group">

                       <div class="col-xs-12">
                          <label>Valid Till</label>
                           <input class="form-control"  id="valid" name="valid" type="text" placeholder="Enter valid till date and month " required>
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