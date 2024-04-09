<?php
include('connection.php');
error_reporting(0);

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
  $email = $res['email'];
  $phone = $res['phone'];
  $username = $res['username'];
  $password = $res['password'];
  $city = $res['city'];
  $state = $res['state'];
  $zipcode = $res['zipcode'];
  $landmark = $res['landmark'];
  $address = $res['address'];
}

if (isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $age = $_POST['age'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $landmark = $_POST['landmark'];
  $address = $_POST['address'];

  $sql = "UPDATE registrations SET lname='$lname', fname='$fname', gender='$gender', dob='$dob', age='$age', height='$height', weight='$weight', email='$email', phone='$phone',username='$username',password='$password', city='$city', state='$state', zipcode='$zipcode', landmark='$landmark', address='$address' WHERE username='$username'";
  mysqli_query($conn, $sql);
  header("location: updateprofileuser.php");
  exit();
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
    <link rel="stylesheet" href="css/updateprofile.css">
    <title>Update Profile</title>
</head>

<body>
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
    <div class="container-fluid">
        <div class="row justify-content-center" id="background-update">
            <div class="col-md-10" id="reg-bgcolor">
                <form action="updateprofileuser.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="fname"></label>
                            <input type="text" name="fname" id="size" value="<?php echo $fname ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="lname"></label>
                            <input type="text" name="lname" id="size" value="<?php echo $lname ?>">
                        </div>
                    </div>
                    <div class="col-md-12">
                      <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="gender"></label>
                                <input type="radio" name="gender" id="male" value="male" <?php if ($gender === "male") echo "checked" ?>>
                                <label for="male">Male</label>
                                <input type="radio" name="gender" id="female" value="female" <?php if ($gender === "female") echo "checked" ?>>
                                <label for="female">Female</label>
                                <input type="radio" name="gender" id="other" value="other" <?php if ($gender === "other") echo "checked" ?>>
                                <label for="other">Other</label>
                            </div>
                            <div class="col-md-6">
                                <label for="dob">DOB</label>
                                <input type="date" name="dob" id="dob" value="<?php echo $dob ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="age"></label>
                                <input type="number" maxlength="2" name="age" id="size" value="<?php echo $age ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="height"></label>
                                <input type="text" maxlength="3" name="height" id="size" value="<?php echo $height ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="weight"></label>
                                <input type="text" name="weight" maxlength="3" id="size" value="<?php echo $weight ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="email"></label>
                                <input type="email" name="email" id="size" value="<?php echo $email ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="phone"></label>
                                <input type="tel" maxlength="10" name="phone" id="size" value="<?php echo $phone ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="username"></label>
                                <input type="text" name="username" id="size" value="<?php echo $username ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="password"></label>
                                <input type="password" maxlength="15" name="password" id="size" value="<?php echo $password?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="city"></label>
                                <input type="text" name="city" id="size" value="<?php echo $city ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="state"></label>
                                <input type="text" name="state" id="size" value="<?php echo $state ?>">
                            </div>
                            <div class="col-md-4">
                                <label for="zipcode"></label>
                                <input type="tel" maxlength="6" name="zipcode" id="size" value="<?php echo $zipcode ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="landmark"></label>
                                <input type="text" name="landmark" id="size" value="<?php echo $landmark ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="address"></label>
                                <input type="text" name="address" id="size" value="<?php echo $address ?>">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <div class="row">
                            <button id="join_btn" type="submit" name="update" >
                                UPDATE
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

