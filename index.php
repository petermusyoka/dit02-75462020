<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");
// if ($count===0) {
//     $err_login="There were some problem";
// }
if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }  
    else  {
        header("Location:../index.php");
      }  
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email.']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>PETER POWER COMPANY</title>

    
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body style="background-image: url('bg1.png');">

                <a class="navbar-brand" href="index.php"><b>PETER POWER COMPANY</b></a>
             <div >
                <?php include("login.php"); ?>
            </div>
               </div>
    </div>
   <div >
      <div class="col-lg-6 signup">
                        <h1>ONLINE SELF-SERVICE</h1>
                        <p><strong>PETER POWER COMPANY provides the best power services. it provides <b>ONLINE PLATIFORM</b> Where customers can open account, login, check their bills and pay.</strong></p>
                    </div>
                    <div class="col-lg-6">
                        <h1>Sign Up</h1>
                        <?php include("signup.php"); ?>
                    </div>
                    </div>
               </div>        
            </div>
    </div>
    <?php 
    require_once("footer.php");
    ?>
    <script src="assets/js/jquery-1.11.0.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
     function validateForm() {
            var x = document.forms["myForm"]["meter no."].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
        }  </script> 
        </body>

</html>
