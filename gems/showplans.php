<?php
include('connection.php');
error_reporting(0);
?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  header("location: loginregister.php");
  exit;
}

$username = $_SESSION["username"];
$findresult = mysqli_query($conn, "SELECT * FROM registrations WHERE username='$username'");

if ($res = mysqli_fetch_array($findresult)) {
 
  $username = $res['username'];
}

if (isset($_POST['logout'])) {
    // Log out the user
    session_destroy(); // Destroy all session data

    // Redirect to the login page or appropriate location after logout
    header("Location: loginregister.php");
    exit();}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/showplans.css">
    <title>USER</title>
</head>
<body>
    <div>
        <nav>
            <h2 class="logo"></h2>
            <ul>
                <a href="userinterface.php">
                    <li><?php echo $_SESSION['username']?></li>
                </a>
                <a href="updateprofileuser.php">
                    <li>Update Profile</li>
                </a>
                <a href="buyplan.php">
                    <li>Buy membership</li>
</a>

                    <a href="userfeedback.php">
                    <li>feedback</li>
                </a>

                
                <a href="loginregister.php">
                    <li>logout</li>
                </a>

            </ul>
        </nav>
       

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" id="volume">
                    <div class="row justify-content-center" id="basiccolor">
                        <div class="col-md-3" id="basic">
                                <h2>Basic</h2>
                                <li>Strength Training Equipment</li>
                                <li>Group Exercise Classes</li>
                                <li>Group Exercise Classes</li>
                                <li>Indoor Track or Sports Courts</li>
                                <br><br><br><br><br><br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="basic-btn">
                                            <a href="buynow.php">buy now</a>
                                        </button>
                                    </div>
                                </div>
                                <br>
                        </div>

                        <div class="col-md-3" id="standard">
                                <h2 id="h2red">standard</h2>
                                <li>Cardiovascular Equipment</li>
                                <li>Strength Training Equipment</li>
                                <li>Group Exercise Classes</li>
                                <li>Group Exercise Classes</li>
                                <li>Indoor Track or Sports Courts</li>
                                <li>Locker Rooms and Showers</li>
                                <br><br><br><br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="standard-btn">
                                            <a href="buynow.php">buy now</a>
                                        </button>
                                    </div>
                                </div>
                                <br>
                        </div>

                        <div class="col-md-3" id="premium">
                                <h2>premium</h2>
                                <li>Cardiovascular Equipment</li>
                                <li>Strength Training Equipment</li>
                                <li>Group Exercise Classes</li>
                                <li>Group Exercise Classes</li>
                                <li>Indoor Track or Sports Courts</li>
                                <li>Locker Rooms and Showers</li>
                                <li>Personal Training</li>
                                <li>Swimming Pool</li>
                                <li>Additional Amenities</li>
                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="premium-btn">
                                            <a href="buynow.php">buy now</a>
                                        </button>
                                    </div>
                                </div>
                                <br>
                        </div>
                        
                       
                    </div>
                </div>
            </div>
        </div>
</body>