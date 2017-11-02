<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTER</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/BT-logo.png">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>PRO-MAN</h1>
                  </div>
                  <p>Register for your Personal Project Manager</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="register-form" action="" method="POST">
                      <div class="form-group">
                      <input id="register-firstname" type="text" name="registerFirstname" required class="input-material">
                      <label for="register-firstname" class="label-material">First Name</label>
                    </div>
                      <div class="form-group">
                      <input id="register-lastname" type="text" name="registerLastname" required class="input-material">
                      <label for="register-lastname" class="label-material">Last Name</label>
                    </div>
                      <div class="form-group">
                      <input id="register-email" type="email" name="registerEmail" required class="input-material">
                      <label for="register-email" class="label-material">Email Address      </label>
                    </div>
                    <div class="form-group">
                      <input id="register-username" type="text" name="registerUsername" required class="input-material">
                      <label for="register-username" class="label-material">User Name</label>
                    </div>
                    
                    <div class="form-group">
                      <input id="register-passowrd" type="password" name="registerPassword" required class="input-material">
                      <label for="register-passowrd" class="label-material">password        </label>
                    </div>
                      <?php  
                            include("config.php");
                            if(isset($_POST["submit"])){  
                                if(!empty($_POST['registerUsername']) && !empty($_POST['registerPassword']) && !empty($_POST['registerFirstname']) && !empty($_POST['registerLastname']) && !empty($_POST['registerEmail'])) { 
                                    $user=$_POST['registerUsername'];  
                                    $pass=$_POST['registerPassword'];
                                    $email=$_POST['registerEmail'];
                                    $fname=$_POST['registerFirstname'];
                                    $lname=$_POST['registerLastname'];    

                                    $query_name=mysqli_query($con,"SELECT * FROM users WHERE username='".$user."'");  
                                    $query_email=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."'");  
                                    $numrows_name=mysqli_num_rows($query_name);  
                                    $numrows_email=mysqli_num_rows($query_email);  
                                    if($numrows_name==0 && $numrows_email==0)  {  
                                        $sql="INSERT INTO users(username,password,first_name,last_name,email) VALUES('$user','$pass','$fname','$lname','$email')";  
                                        $result=mysqli_query($con,$sql);  
                                        if($result){ 
                                            session_start();  
                                            $_SESSION['sess_user']=$user; 
                                            echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>Account Successfully Created<br>redirecting to SUBJECT SELECT page...</p>";
                                            header("refresh:1;url=subjects.php");
                                        } else {  
                                            echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>Failure!</p>";  
                                        }  
                                    } else if ($numrows_name==0){  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>The e-mail you provided is already registered with us. Please try again with another.</p>";  
                                    } else if ($numrows_email==0){  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>That username already exists! Please try again with another.</p>";  
                                    } else{  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>The username and e-mail you provided is already registered with us. Please try again with another.<br>redirecting to Login page...</p>";
                                    }
                                } else {  
                                    echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>All fields are required!</p>";  
                                }  
                            }  
                        ?>
                    <input id="register" type="submit" value="Register" class="btn btn-primary" name="submit">
                  </form>
                    <small>Already have an account? </small><a href="login.php" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
         Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)
      </div> -->
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>