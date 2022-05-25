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
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <nav class="navbar navbar-default" style="margin-top: 25px;">
                    <div class="container-fluid">

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="adminhome.php">Home</a></li>
                            <li><a href="customers.php">Customers</a></li>
                            <li><a href="viewablogs.php">Blog</a></li>
                            <li><a href="managehotels.php">Hotels</a></li>
                            <li ><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>


    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">Admin Dashbaord</h2>
                
            </div>
            
            <div class="col-md-4" style="margin-top: 30px;">
                
              <a href="managecities.php">  <div class="well">Cities</div></a>
            </div>

            <div class="col-md-4" style="margin-top: 30px;">

              <a href="managehotels.php"> <div class="well">Hotels</div></a>
              
               
            </div>

            <div class="col-md-4" style="margin-top: 30px;">
               <a href="managerooms.php"> <div class="well">Hotel Rooms</div></a>
            </div>
            
             <div class="col-md-4" style="margin-top: 30px;">
               <a href="managedeals.php"> <div class="well">Hotel Deals</div></a>
            </div>
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

</body>

</html>