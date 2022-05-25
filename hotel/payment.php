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
height: 150px;
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
            <div class="col-md-3" style="margin-top: 30px;"></div>

            <div class="col-md-6" style="margin-top: 30px;">

                <h2 style="text-align: center;">Payment</h2>
                <form method="GET" action="payments.php">
                   
                   <div class="row">
                       
                       
                       <div class="col-md-12" hidden>
                                
                                    <input type="text" id="rid" name="rid" value="<?php echo $_GET['rid'];?>" readonly class="form-control" required hidden>
                                     <input type="text" id="fromdate" name="fromdate" value="<?php echo $_GET['fromdate'];?>" readonly class="form-control" required hidden> 
                                      <input type="text" id="todate" name="todate" value="<?php echo $_GET['todate'];?>" readonly class="form-control" required hidden> 
                                       <input type="text" id="days" name="days" value="<?php echo $_GET['days'];?>" readonly class="form-control" required hidden> 
                                        <input type="text" id="tot" name="tot" value="<?php echo $_GET['tot'];?>" readonly class="form-control" required hidden> 
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">Full Name</label>
                                    <input type="text" id="f_name" name="f_name" class="form-control" required> 
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="exp">Exp</label>
                                    <input type="tel" id="exp" name="exp" class="form-control" placeholder="YYYY" pattern="[0-9]{4}" required>
                                </div>
                               
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="cno">Card Number</label>
                                    <input type="text" id="cno" name="cno" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="cvv">CVV</label>
                                    <input type="password" id="cvv" name="cvv" class="form-control" placeholder="***" pattern="[0-9]{3}" required>
                                
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
            <br/>
                            <input type="submit" class="btn btn-primary form-control" value="Submit" name="submit" id="submit" required>
                            </div>
                            </div>
                           

        
               </form>

                
               
            </div>

            <div class="col-md-3" style="margin-top: 30px;"></div>
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