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
                             <li><a href="viewdeals.php">Deals</a></li>
                            <li ><a href="viewblogs.php">Blog</a></li>
                            <li><a href="mybookings.php">Bookings</a></li>
                            <li class="active"><a href="myprofile.php">Profile</a></li>
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
                 <h2 style="text-align: center;">My Profile</h2>
                
                
                <table class="table table-bordered table-striped">
                           <tr>
                               <th>Customer Id</th>
                               <th>First Name</th>
                               <th>Last Name</th>
                               <th>Email</th>
                                <th>Phone</th>
                               <th>Password</th>
                               <th>Update</th>
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM customer where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<td> " . $row["cid"]. " </td><td> " . $row["fname"]. " </td><td> " . $row["lname"]. " </td> <td> " . $row["email"]. " </td><td> " . $row["phone"]. "</td><td> " . $row["pass"]. "</td>
                                    
                                    
                                    <td>
                                    
                                     <a   href='myprofiledetails.php?id=". $row['cid'] . " '>
                                     
                                     <span class='glyphicon glyphicon-edit'></span>
                                     
                                      </a>
                                    
                                    </td>
                                    
                                    
                                    <div class='modal fade' id='" . $row["cid"] . "'   role='dialog'   aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h3 class='modal-title' />Update Personal Information</h3>
                                                
                                            </div>
                                            <div class='modal-body'>
                    
                                                <form method='GET' action='myprofiledetails.php'>
                                                
                                                 <div class='form-group'>
                                                        <label>Customer Id</label>
                
                                                <input type='text' class='form-control' name='id' value='" . $row["cid"] . "' hidden readonly>
                   </div>
                
                                                    <div class='form-group'>
                                                        <label>First Name</label>
                                                        <input type='text' class='form-control' name='fname' value='" . $row["fname"] . "' required>
                                                      
                                                    </div>
                                                    
                                                    <div class='form-group'>
                                                        <label>Last Name</label>
                                                        <input type='text' class='form-control' name='lname' value='" . $row["lname"] . "' required>
                                                      
                                                    </div>

                                                     <div class='form-group'>
                                                        <label>Email</label>
                                                        <input type='text' class='form-control' name='email' value='" . $row["email"] . "' required readonly>
                                                      
                                                    </div>
                                                 
                                                     <div class='form-group'>
                                                        <label>Phone</label>
                                                        <input type='number' class='form-control' name='phone' value='" . $row["phone"] . "' required>
                                                      
                                                    </div>
                                                       
                                                    
                                                   
                                                     <div class='form-group'>
                                                        <label>Password</label>
                                                        <input type='password' class='form-control' name='pass' value='" . $row["pass"] . "' required>
                                                      
                                                    </div>
                                                   
                                                    <button class='btn btn-primary form-control'>Update </button>
                                                </form>
                    
                    
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }
                                } else {
                                  echo "Something went wrong";
                                }
                                
                                mysqli_close($conn);
                            
                           
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