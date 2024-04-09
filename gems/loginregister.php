<?php
include('connection.php');
error_reporting(0);
?>



<!DOCTYPE html>
<html>
<head>
  <title>Registration Form Popup</title>
  
  <link rel="stylesheet" href="css/signup.css">
  <link rel="stylesheet" href="css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

  
		<nav>
			<h2 class="logo"></h2>
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="#"><li>Membership</li></a>
				<a href="about.html"><li>About</li></a> 
				<a href="#"><li>Contact</li></a>
				<a href="#"><li>FAQ</li></a>
			</ul>
		</nav>
    
    <div class="contaioner-fliuid">
        <div class="row justify-content-between" id="position" >
            <div class="col-md-3" id="background">
            
                
              <br><br><br>
              <!-- <h2 id="logintag"></h2> -->
              <form action="loginregister.php" method="post" id="loginbar">
             
             <?php
require('connection.php');
$login=false;
$showerror=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="select * from registrations where username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location:userinterface.php");
    }
    else
    {
        $showerror="invalid credentials";
    }
    
?>

                <div>
                  <label for="username"></label>
                  <input type="text" name="username" placeholder="Username" id="place" required>
                </div>
                <br>
                <div>
                  <label for="password"></label>
                  <input type="input" name="password" placeholder="Password" id="place" required>
                </div>
                <br>
                <a href="#" id="choose">Forget Password ?</a>
                <br><br>
                <div>
                  <!-- <button id="login-btn">
                    <input type="submit" value="LOG IN" >
                  </button> -->
                  
                <button id="login-btn">
                  <input type="submit" value="LOG IN" >
                </button>
                  <br>
                  
                    <button id="open_popup_btn">JOIN US</button>
                  
                  
                </div>
              
                <!-- <div>
      
                  <button>
                    <button id="open_popup_btn">JOIN US</button>
                  </button>
                  
                
        
                </div> -->
      
              </form>

              <form action="loginregister.php" method="post">
                <?php
require('connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
    

    $query = "INSERT INTO registrations (fname, lname, gender, dob , age, height, weight , email , phone , username , password , city , state , zipcode , landmark , address ) VALUES ('$fname', '$lname', '$gender', '$dob', '$age', '$height', '$weight','$email','$phone','$username','$password','$city','$state','$zipcode','$landmark','$address')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('New record inserted')</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>

              <div class="col-md-8" id="reg-bgcolor">
  <div class="registration-form-popup">
    <div class="popup-content">
        </div>
        

            <svg id="close_btn" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
              <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            
     
            <div class="row">

              
    
              
    
    
              <h3 id="pd">Resgistration Form</h3>
    
    
              <div class="col-md-6">
    
                <label for="fname"></label>
                <input type="input" name="fname" id="size" placeholder="First Name" required>
    
              </div>
    
              <div class="col-md-6">
    
                <label for="lname"></label>
                <input type="input" name="lname" id="size" placeholder="Last Name">
    
              </div>
            </div>
    
    
    
    
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-6">
                  <br><br>
                  <label for="gender"></label>
                 
                  <input type="radio" name="gender" id="gender"  value="male" required>Male &nbsp;
    
                  <input type="radio" name="gender" id="gender"  value="female" required>Female &nbsp;

                  <input type="radio" name="gender" id="gender"   value="other" required>Others 
                </div>
    
                <div class="col-md-6">
                  <br><br>
                  <label for="bithday">DOB:</label>
                  <input type="date" name="dob">
                </div>
              </div>
            </div>
    
            
    
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-4">
                  <label for="age"></label>
                  <input type="tel" maxlength="2" id="size" name="age" placeholder="Age" required>
                </div>
    
                <div class="col-md-4">
                  <label for="height"></label>
                  <input type="tel" id="size" name="height" placeholder="Height (in cm)">
                </div>
    
                <div class="col-md-4">
                  <label for="weight"></label>
                  <input type="tel" id="size" name="weight" placeholder="Weight">
                </div>
    
              </div>
            </div>
    
    
    
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-6">
                  <label for="email"></label>
                  <input type="email" id="size" name="email" placeholder="Email">
                </div>
    
                <div class="col-md-6">
                  <label for="phone"></label>
                  <input type="tel" maxlength="10" id="size" name="phone" placeholder="Mobile No." required>
                </div>
              </div>
            </div>

            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-6">
                  <label for="username"></label>
                  <input type="username" id="size" name="username" placeholder="Username" required>
                </div>
    
                <div class="col-md-6">
                  <label for="password"></label>
                  <input type="password" maxlength="15" id="size" name="password" placeholder="Password" required>
                </div>
              </div>
            </div>
            
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-4">
                  <label for="city"></label>
                  <input type="input" id="size" name="city" placeholder="City">
                </div>
    
                <div class="col-md-4">
                  <label for="state"></label>
                  <input type="input" id="size" name="state" placeholder="State">
                </div>
    
                <div class="col-md-4">
                  <label for="zipcode"></label>
                  <input type="tel" id="size" maxlength="10" name="zipcode" placeholder="zipcode">
                </div>
              </div>
            </div>
    
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-12">
                  <label for="landmark"></label>
                  <input type="input" id="size" name="landmark" placeholder="Landmark">
                </div>
              </div>
            </div>
    
            <div class="col-md-12">
    
              <div class="row">
    
                <div class="col-md-12">
                  <label for="address"></label>
                  <input type="input" id="size" name="address" placeholder="Address" required>
                </div>
              </div>
            </div>
    
            <br>
    
            <div class="col-md-12">
              <div class="row">
    
                <button id="join_btn">
                  <input type="submit" value="join us">
                </button>
    
              </div>
            </div>
          </div>
    
          </form>
    </div>
  </div>
</div>
</div>
  <script src="registration.js"></script>
</body>
</html>
