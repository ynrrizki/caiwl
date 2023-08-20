<?php
require_once("include/initialize.php");
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>


<style type="text/css">
  body {
    background-color: #fff;
  }
</style>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo web_root; ?>sneat/assets/js/config.js"></script>
  <style>
    .app-brand-logo {
      height: 250px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <p>
          <?php echo check_message() ?>
        </p>
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="images/Full.png" alt="Gambar" width="450" height="450">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <form id="formAuthentication" class="mb-3" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="user_email" placeholder="Enter your username" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="user_pass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" name="btnLogin">Sign in</button>
              </div>
            </form>

            <div class="text-center p-t-136">
              <span>New on our platform? </span>
              <a class="txt2 " href="register.php">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
            </form>
          </div>
        </div>
      </div>



      <?php

      if (isset($_POST['btnLogin'])) {
        $email = trim($_POST['user_email']);
        $upass  = trim($_POST['user_pass']);
        $h_upass = sha1($upass);

        if ($email == '' or $upass == '') {

          message("Invalid Username and Password!", "error");
          redirect(web_root . "login.php");
        } else {
          //it creates a new objects of member
          $student = new Student();
          //make use of the static function, and we passed to parameters
          $res = $student::studentAuthentication($email, $h_upass);
          if ($res == true) {
            redirect(web_root . "index.php");

            echo $_SESSION['StudentID'];
          } else {
            message("Account does not exist! Please contact Administrator.", "error");
            redirect(web_root . "login.php");
          }
        }
      }
      ?>

      <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/jquery.js"></script>
      <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?php echo web_root; ?>vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="<?php echo web_root; ?>vendor/tilt/tilt.jquery.min.js"></script>
      <script>
        $('.js-tilt').tilt({
          scale: 1.1
        })
      </script>
      <!--===============================================================================================-->
      <script src="js/main.js"></script>

</body>

</html>