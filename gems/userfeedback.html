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
  $email = $res['email'];
  $phone = $res['phone'];
  $username = $res['username'];
}


if (isset($_POST['logout'])) {
  // Log out the user
  session_destroy(); // Destroy all session data

  // Redirect to the login page or appropriate location after logout
  header("Location: loginregister.php");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $subject = $_POST['subject'];
    $feedback = $_POST['feedback'];


    $query = "INSERT INTO feedback (name, email, phone, username , subject, feedback) VALUES ('$name', '$email', '$phone', '$username', '$subject', '$feedback')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('New record inserted')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
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
    <link rel="stylesheet" href="css/buynow.css">
    <link rel="stylesheet" href="css/userfeedback.css">
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
                <h3>FEEDBACK</h3>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name"></label>
                            <input type="text" name="name" id="size" value="<?php echo $fname ?> <?php echo $lname ?>">
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
                                <input type="text" name="username" id="size" value="<?php echo $_SESSION['username'] ?>">
                            </div>
                    
                                    <div class="col-md-6">
                                        <br>
                            <label for="Subject"></label>
                            <select id="subject" id="subject" name="subject"  placeholder="SUBJECT">
                                <option value="positive" aria-multiselectable="positive">Positive</option>
                                <option value="Accessibility">Accessibility</option>
                                <option value="Atmosphere">Atmosphere</option>
                                <option value="Cleanliness">Cleanliness</option>
                                <option value="Classes and Programs">Classes and Programs</option>
                                <option value="equipments">Equipment</option>
                                <option value="Facilities and Amenities">Facilities and Amenities</option>
                                <option value="Membership and Pricing">Membership and Pricing</option>
                                <option value="Personal Training">Personal Training</option>
                                <option value="Staff and Customer Service">Staff and Customer Service</option>
                                <option value="Suggestions">Suggestions</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <br>
            <label for="feedback"></label>
            <textarea name="feedback" rows="5" cols="40" style="padding:5px ; margin-left: 5%" required></textarea>
            <br>
            <button type="submit" id="send"  style="margin-left: 6%">SEND</button>
        </div>
    </div>
</div>

            
                    
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
