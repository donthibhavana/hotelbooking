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
        
    .stars-outer {
  display: inline-block;
  position: relative;
  font-family: FontAwesome;
}
 
.stars-outer::before {
  content: "\f006 \f006 \f006 \f006 \f006";
}
 
.stars-inner {
  position: absolute;
  top: 0;
  left: 0;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}
 
.stars-inner::before {
  content: "\f005 \f005 \f005 \f005 \f005";
  color: #f8ce0b;
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
                            <li><a href="viewablogs.php">Blog</a></li>
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
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">Manage Hotels</h2>
                 
                 
                 
                 <hr/>
                 
                <a href="addhotel.php"> <button type="button" class="btn btn-success">Add Hotel</button></a>
                <br/>
             
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                            <th>Hotel ID</th>
                             <th>Image</th>
                             <th>Country Name</th>
                            <th>City Name</th>
                            <th>Hotel Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Rating</th>
                            <th>Rooms</th>
                             <th>Action</th>
                           
                        </tr>
                     
                        <?php



                        include 'config.php';

                        //SELECT `hid`, `city_id`, `hname`, `image`, `rating`, `phone`, `address` FROM `hotel` WHERE 1
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT * FROM `hotel` join city on hotel.city_id=city.city_id order by hid";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['hid'] . "</td>
                                <td> <img src='" . $row['image'] . "' style='height:80px;width:80px'/></td>
                               
                                <td> " . $row['country'] . "</td>
                                 <td> " . $row['name'] . "</td>
                                 <td> " . $row['hname'] . "</td>
                                <td> " . $row['phone'] . "</td>
                                 <td> " . $row['address'] . "</td>
                                 
                                  <td>
                                  " . $row['rating'] . "
                                <span class='fa fa-star checked'></span>
                                    </div>
                                    </td>
                                    <td>
                                     <a href='addroom.php?id=" . $row['hid'] . "&hname=" . $row['hname'] . "'>
                                            <button class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-plus'></span> </button>
                                        </a><br/>
                                        <a href='managerooms.php'>Manage Rooms</a>
                                    </td>
                                    <td>
                                    <a href='edithotel.php?id=" . $row['hid'] . "&country=" . $row['country'] . "&city=" . $row['name'] . "&hname=" . $row['hname'] . "&phone=" . $row['phone'] . "&address=" . $row['address'] . "'>
                                            <button class='btn btn-success btn-sm' ><span class='glyphicon glyphicon-edit'></span> </button>
                                        </a>
                                    
                                      <a href='deletehotel.php?id=" . $row['hid'] . "'>
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