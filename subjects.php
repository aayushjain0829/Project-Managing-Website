<?php   
session_start();  
ob_start();
if(!isset($_SESSION["sess_user"])){  
    header("location:register.php");  
} else {  
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SUBJECTS</title>
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
    <!-- Font Icons CSS-->
    <!-- <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link rel="stylesheet" href="css/font-awesome.css">
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-3">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>PRO-MAN</h1>
                  </div>
                  <p>Chose your subjects for your Personal Project Manager.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-9 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                    <form action="" method="POST">
                  <div class="row">
                  	<div class="col-lg-4">
                  		<div class="sel sel--black-panther">
		                    <select name="PDE">
		                      <option value="PDE" disabled>PDE</option>
		                    </select>
		                  </div>

		                  <hr class="rule">

		                  <div class="sel sel--superman">
		                    <select name="Data Modeling">
		                      <option value="Data Modeling" disabled>Data Modeling</option>
		                    </select>
	                    </div>
                  	</div>
                  	<div class="col-lg-4">
                  		<div class="sel sel--black-panther">
		                    <select name="OS">
		                      <option value="OS" disabled>OS</option>
		                    </select>
		                  </div>

		                  <hr class="rule">

		                  <div class="sel sel--superman">
		                    <select name="NLP">
		                      <option value="NLP" disabled>NLP</option>
		                    </select>
	                    </div>
                  	</div>
                  	<div class="col-lg-4">
                  		<div class="sel sel--black-panther">
		                    <select name="Special-1" id="Special_1">
		                      <option value="Spec1">Specialization I</option>
		                      <option value="Micro Economics">Micro Economics</option>
		                      <option value="Electronics">Electronics</option>
		                      <option value="Biology">Biology</option>
		                    </select>
		                  </div>

		                  <hr class="rule">

		                  <div class="sel sel--superman">
		                    <select name="Special-2" id="Special_2">
		                      <option value="Spec2">Specialization II</option>
		                      <option value="POM">POM</option>
		                      <option value="Electronics: Lab">Electronics: Lab</option>
		                      <option value="Cell prespective">Cell prespective</option>
		                    </select>
	                    </div>
                  	</div>
                  </div>
               <?php  
                        if(isset($_POST["submit"])) {  
                            if(!empty($_POST['Special-1']) && !empty($_POST['Special-2'])) {  
                                $spec1=$_POST['Special-1'];  
                                $spec2=$_POST['Special-2'];  
                                if(($spec1 == 'Micro Economics' && $spec2 == 'POM') || ($spec1 == 'Electronics' && $spec2 == 'Electronics: Lab') || ($spec1 == 'Biology' && $spec2 == 'Cell prespective')) {
                                    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
                                    mysqli_select_db($con,'user-registration') or die("cannot select DB");  
                                    $user=$_SESSION['sess_user'];
                                    echo $user;
                                    $query= "INSERT INTO SUBJECTS VALUES('$user','PDE','Data Modeling','OS','NLP','$spec1','$spec2');";  
                                    $result=mysqli_query($con,$query);  
                                    if($result){  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:1.5em;'>Subjects Successfully Choosed<br>Please login to continue...</p>";
                                        header("refresh:1;url=logout.php");
                                        exit();
                                    } else {  
                                        echo "<p style='color:#d9534f; text-align:center; font-size:1.5em;'>Failure!<br>Please register again...</p>";
                                        $del = "DELETE FROM users WHERE username = '$user';";
                                        $res = mysqli_query($con,$del);
                                        header("refresh:1;url=register.php");
                                    }
                                } else if($spec1 == 'Spec1' || $spec2 == 'Spec2') {
                                     echo "<p style='color:#d9534f; text-align:center; font-size:1.5em;'>Please select all subjects!</p>";
                                }
                                else {
                                    echo "<p style='color:#d9534f; text-align:center; font-size:1.5em;'>Selected subject pair not available!</p>";  
                                }
                            } else {  
                                echo "<p style='color:#d9534f; text-align:center; font-size:1.5em;'>All fields are required!</p>";  
                            }  
                        }    
                    ?>
                  <div class="row">
                  	<div class="col-lg-5"></div>
                  	<div class="col-lg-1">
                  		<input id="submit" type="submit" value="CONFIRM" name="submit" class="btn btn-primary btn-primary-center"/>
                  	</div>
                  </div>
                        </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
         Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)
      </div> -->
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/sub-js.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <!-- <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script> -->
  </body>
</html>
<?php  
}  
?> 