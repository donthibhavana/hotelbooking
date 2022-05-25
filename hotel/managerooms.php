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
                 <h2 style="text-align: center;">Manage Rooms</h2>
                 
                 
                 
                 <hr/>
                 
                
                 <table class="table table-stripped table-bordered">
                    
                        <tr>
                            <th> Room ID</th>
                            <th>Hotel Name</th>
                             <th>Image</th>
                             <th>Room Number</th>
                            <th>Room Type</th>
                            
                            <th>No of Beds</th>
                            <th>Amount</th>
                            <th>Images</th>
                           
                             <th>Action</th>
                           
                        </tr>
                     
                        <?php



                        include 'config.php';

                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        $sql = "SELECT room.rid,room.roomnumber,room.type,room.beds,room.image,room.price,hotel.hname FROM `room` join hotel on room.hid=hotel.hid";
                        $result = $conn->query($sql);

                        if ($result) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo  "
                                <tr>
                                <td> " . $row['rid'] . "</td>
                                    <td> " . $row['hname'] . "</td>
                                <td> <img src='" . $row['image'] . "' style='height:50px;width:50px'/></td>
                               
                                <td> " . $row['roomnumber'] . "</td>
                                 <td> " . $row['type'] . "</td>
                                 <td> " . $row['beds'] . "</td>
                                <td> " . $row['price'] . "</td>
                             
                                 
                                 
                                 <td>  <a   data-toggle='modal' data-target='#a" . $row["rid"] . "' style='cursor:pointer'>
                                         <button class='btn btn-success' >+ </button>
                                    </a>
                                
                                
                                <div class='modal fade' id='a" . $row["rid"] . "'   role='dialog'   aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h3 class='modal-title' id='exampleModalLabel'>Add Product Images</h3>
                                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                    <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                    
                                                <form method='POST' action='addimages.php' enctype='multipart/form-data' >
                
                                                <input type='text' class='form-control' name='rid' value='" . $row["rid"] . "' hidden  readonly>
                
                                                  
                                                 <div class='form-group'>
                                                                    <label for='file'>Image</label>
                                                                    <input type='file' class='form-control' name='file' id='file' required=''>
                                                                </div>
                    
                                                    <button class='btn btn-primary form-control'  type='submit'>Add</button>
                                                </form>
                    
                    
                                            </div>
                                           
                                        </div>
                                    </div>
                                
                                
                                </td>
                                
                              
                                 
                            
                                    <td>
                                   
                                      <a href='deleteroom.php?id=" . $row['rid'] . "'>
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