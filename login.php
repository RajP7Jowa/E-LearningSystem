<?php
require_once("include/initialize.php");
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}

if (isset($_POST['btnLogin'])) {
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);

  if ($email == '' or $upass == '') {

    message("Invalid Username and Password!", "error");
    // redirect(web_root . "login.php");
  } else {
    //it creates a new objects of member
    $student = new Student();
    //make use of the static function, and we passed to parameters
    $res = $student::studentAuthentication($email, $h_upass);
    if ($res == true) {
      redirect(web_root . "index.php");

      // echo $_SESSION['StudentID'];
    } else {
      message("Account does not exist! Please contact Administrator.", "error");
      // redirect(web_root . "login.php");
    }
  }
}
?>


<style type="text/css">
  body {
    background-color: #0000;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>assets/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>assets/font-awesome-4.7/css/font-awesome.min.css">

  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>assets/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>assets/mainlogin.css">
  <!--===============================================================================================-->
</head>

<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilte>
          <img src="<?php echo web_root; ?>assets/images/ebook-live-animated-mobile.gif" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="" method="POST">
          <span class="login100-form-title">
            Member Login
          </span>
          <?php check_message(); ?>
          
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="user_email" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input class="input100" type="password" name="user_pass" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="btnLogin">
              Login
            </button>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="register.php">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>

</html>