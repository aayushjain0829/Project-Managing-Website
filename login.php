<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <!-- <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css"> -->
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
                    <h1>Dashboard</h1>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form id="login-form" method="post">
                    <div class="form-group">
                      <input id="login-username" type="text" name="loginUsername" required="" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="loginPassword" required="" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                      <?php  
                            include("config.php");
                            if(isset($_POST["submit"])) {  
                                if(!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])) {  
                                    $user=$_POST['loginUsername'];  
                                    $pass=$_POST['loginPassword'];  

                                    $query=mysqli_query($con,"SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");  
                                    $numrows=mysqli_num_rows($query);  
                                    if($numrows!=0)  {  
                                        while($row=mysqli_fetch_assoc($query))  {  
                                            $dbusername=$row['username'];  
                                            $dbpassword=$row['password'];  
                                        }  
                                        if($user == $dbusername && $pass == $dbpassword)  {
                                            session_start();  
                                            $fname=mysqli_query($con,"SELECT first_name FROM users WHERE username='".$user."'");
                                            $lname=mysqli_query($con,"SELECT last_name FROM users WHERE username='".$user."'");
                                            $sp1=mysqli_query($con,"SELECT sub5 FROM subjects WHERE user_name='".$user."'");
                                            $sp2=mysqli_query($con,"SELECT sub6 FROM subjects WHERE user_name='".$user."'");
                                            $_SESSION['sess_user']=$user;  
                                            $_SESSION['sess_fname']=$fname->fetch_object()->first_name; 
                                            $_SESSION['sess_lname']=$lname->fetch_object()->last_name;
                                            $_SESSION['sess_sp1']=$sp1->fetch_object()->sub5;
                                            $_SESSION['sess_sp2']=$sp2->fetch_object()->sub6;  
                                            /* Redirect browser */  
                                            header("Location: index.php");  
                                        }  
                                    } else {  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>Invalid username or password!</p>";  
                                    }  
                                } else {  
                                    echo "<p style='color:#d9534f; text-align:center; font-size:0.75em;'>All fields are required!</p>";  
                                }  
                            }    
                        ?>
                      <input type="submit" value="Login" name="submit" class="btn btn-primary"/>  
                  </form><a href="#" class="forgot-pass">Forgot Password?</a><br><small>Do not have an account? </small><a href="register.php" class="signup">Signup</a>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
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