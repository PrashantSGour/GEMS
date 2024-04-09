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
  $fname = $res['fname'];
  $lname = $res['lname'];
  $gender = $res['gender'];
  $dob = $res['dob'];
  $age = $res['age'];
  $height = $res['height'];
  $weight = $res['weight'];
}

$username = $_SESSION["username"];
$findresult = mysqli_query($conn, "SELECT * FROM membership WHERE username='$username'");

if ($res = mysqli_fetch_array($findresult)) {
  $plan = $res['plan'];
  $duration = $res['duration'];
}

if (isset($_POST['logout'])) {
    // Log out the user
    session_destroy(); // Destroy all session data

    // Redirect to the login page or appropriate location after logout
    header("Location: loginregister.php");
    exit();}

// $findresult = mysqli_query($conn, "SELECT * FROM plan");

// if ($res = mysqli_fetch_array($findresult)) {
//   $plan = $res['plan'];
//   $threemonth = $res['threemonth'];
//   $yearly = $res['yearly'];
// }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/userinterface.css">
    <title>USER</title>
</head>

<body>
    <div>
        <nav>
            <h2 class="logo"></h2>
            <ul>
                <a href="userinterface.php">
                    <li><?php echo $_SESSION['username']; ?></li>
                </a>
                <a href="updateprofileuser.php">
                    <li>Update Profile</li>
                </a>
                <a href="showplans.php">
                    <li>Our Plans</li>
                </a>
                <a href="userfeedback.php">
                    <li>feedback</li>
                </a>

                <a href="loginregister.php">
                    <li>Logout</li>
                </a>


            </ul>
        </nav>
        <br><br><br>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3>Welcome</h3>
                <!-- <h1>gems</h1> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row justify-content-center">
                    <div class="col-md-3" id="bg-red">
                        <br>
                        <p>Name</p>
                        <p>Gender</p>
                        <p>Age</p>
                        <p>Date of birth</p>
                        <p>Height</p>
                        <p>Weight</p>
                        <p>Membership</p>
                        <p>Duration</p>
                    </div>
                    <div class="col-md-3" id="bg-white">
                        <br>
                        <p><?php echo $fname; ?>&nbsp;<?php echo $lname ?></p>
                        <p><?php echo $gender; ?></p>
                        <p><?php echo $age; ?></p>
                        <p><?php echo $dob; ?></p>
                        <p><?php echo $height; ?>&nbsp;INCHES</p>
                        <p><?php echo $weight; ?>&nbsp;KG</p>
                        <p><?php echo $plan; ?></p>
                        <p><?php echo $duration; ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <br>
                                <a href="updateprofileuser.php"><button>Update</button></a>
                                <a href="loginregister.php"><button>Logout</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
