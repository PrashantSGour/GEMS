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
  $email = $res['email'];
  $phone = $res['phone'];
  $username = $res['username'];
}?>

 <?php
require('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $plan = $_POST['plan'];
    $duration = $_POST['duration'];

    $query = "INSERT INTO membership (name , username , phone , email , plan , duration) VALUES ('$name', '$username', '$phone', '$email', '$plan', '$duration')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('New record inserted')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
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
    <link rel="stylesheet" href="css/buynow.css">
    <title>Buy</title>
</head>

<body>
    
        <nav>
            <h2 class="logo"></h2>
            <ul>
                <a href="userinterface.php">
                    <li><?php echo $_SESSION['username']?></li>
                </a>
                <a href="updateprofileuser.php">
                    <li>Update Profile</li>
                </a>
                <a href="showplans.php">
                  <li>Our plans</li>
              </a>

              <a href="userfeedback.php">
                    <li>feedback</li>
                </a>

                <a href="loginregister.php">
                    <li>logout</li>
                </a>

            </ul>
        </nav>
        <div class="contaioner-fliuid">
            
            <div class="row justify-content-center" id="background-update">
    
                  <div class="col-md-10" id="reg-bgcolor">

                    <h3>BUY PLAN</h3>

                    <form action="#" method="post">
      
                <div class="row">
        
               
                  <div class="col-md-12">
        
                    <label for="name"></label>
                    <input type="input" name="name" id="size" placeholder="Name" value="<?php echo $fname?> <?php echo $lname?>" required>
        
                  </div>

                  <div class="col-md-12">
        
        <label for="username"></label>
        <input type="input" name="username" id="size" placeholder="Username" value="<?php echo $_SESSION['username']?>" disabled required>

      </div>
        
                <div class="col-md-12">
        
                  <div class="row">
        
                    <div class="col-md-6">
                      <label for="phone"></label>
                      <input type="tel" id="size" name="phone" placeholder="Mobile No." maxlength="10" value="<?php echo $phone?>" required>
                    </div>
        
                    <div class="col-md-6">
                      <label for="email"></label>
                      <input type="email"  id="size" name="email" placeholder="Email" value="<?php echo $email?>" required>
                    </div>
                  </div>
                  <br><br>
                </div>
                

        
                <div class="col-md-12">
        
               <div class="row">
                
               <div class="col-md-6">
                 <label for="plan"></label>
               <select id="option" name="plan" required>
        <option value="Basic">BASIC</option>
        <option value="standard">STANDARD</option>
        <option value="premium">PREMIUM</option>
            </select>
</div>

        <div class="col-md-6">
    <label for="duration">Duration:</label>
    <select id="option" name="duration" required>
        <option value="monthly">MONTHLY</option>
        <option value="quarterly">QUARTERLY</option>
        <option value="yearly">YEARLY</option>
    </select>
</div>

                 </div>

                </div>
                <br><br>
              </div>

                <br>
        
                <div class="col-md-12">
                  <div class="row">
        
                    <button id="join_btn">
                      <a href="">
                      <input type="submit" value="BUY NOW"></a>
                    </button>
        
                  </div>
                </div>
              </div>
        
              </form>
        </div>
      </div>
    </div>
    </div>
            
</body>