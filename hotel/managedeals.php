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
                            <li><a href="adminhome.php">Home</a></li>
                            <li><a href="customers.php">Customers</a></li>
                            <li><a href="viewblogs.php">Blog</a></li>
                            <li  class="active"><a href="managehotels.php">Hotels</a></li>
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
                 <h2 style="text-align: center;">Manage Deals</h2>
                 
                 
                 
                 <hr/>
                 
                <a href="adddeal.php"> <button type="button" class="btn btn-success">Add Deals</button></a>
                <br/>
             
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                            <th>Deal ID</th>
                            <th>Image</th>
                               <th>Hotel Name</th>
                            <th>Season</th>
                            <th>Stay Type</th>
                         
                             <th>Amount</th>
                            <th>Valid Upto</th>
                             <th>Action</th>
                            
                           
                        </tr>
                     
                        <?php



                        include 'config.php';

                        //SELECT `city_id`, `name`, `country` FROM `city` WHERE 1
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM `deals` join hotel on deals.hid=hotel.hid";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['did'] . "</td>
                                <td> <img src=' " . $row['image'] . "' style='width:80px;height:80px' /></td>
                                 <td> " . $row['hname'] . "</td>
                                 <td> " . $row['season'] . "</td>
                                 <td> " . $row['stay'] . "</td>
                                 <td> " . $row['amount'] . "</td>
                                 <td> " . $row['valid'] . "</td>
                                <td>
                                
                                 <a href='deletedeal.php?id=" . $row['did'] . "'>
                                            <button class='btn btn-danger btn-sm' ><span class='glyphicon glyphicon-trash'></span> </button>
                                        </a>
                                </td>
                            
                                
                                </tr> ";
                            }
                        } else {
                            echo "No Records Found";
                        }
                        $conn->close();
                        ?>
                     
                </table>
                
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