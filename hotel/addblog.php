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
            <div class="col-md-3">

            </div>
            <div class="col-md-5">
                <nav class="navbar navbar-default" style="margin-top: 25px;">
                    <div class="container-fluid">

                        <ul class="nav navbar-nav">
                            <li ><a href="home.php">Home</a></li>
                            <li><a href="viewhotels.php">Hotels</a></li>
                            <li class="active"><a href="viewblogs.php">Blog</a></li>
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
            
            <div class="col-md-4"></div>
            
            <div class="col-md-4">
                 <h3 style="text-align: center;">Share your Exprience</h3>
                 
          <form method="POST" action="addblogs.php" enctype="multipart/form-data">
                   <div class="form-group row">

                       <div class="col-xs-12">
                           
                          <label>Country Name</label>
                           <?php
                            require_once('config.php');
                            $member_result = $conn->query('select * from country');
                            ?><select name="country" id="country" class="form-control">
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
                          <label>Place Name</label>
                           <input class="form-control"  id="name" name="name" type="text" placeholder="Enter Destination name" required>
                       </div>

                   </div>
                   
                   
                   
                    <div class="form-group">
                                    <label for="file">Image</label>
                                    <input type="file" class="form-control" name="file" id="file" required="">
                                </div>
                                
                                 <div class="form-group row">

                       <div class="col-xs-12">
                          <label>Description</label>
                           <textarea class="form-control"  id="des" name="des" type="text" placeholder="Enter Description" required></textarea>
                       </div>

                   </div>
                   
                   

               <button class="btn btn-info">Post</button>
        
               </form>
                
            </div>
            <div class="col-md-4"></div>
            
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