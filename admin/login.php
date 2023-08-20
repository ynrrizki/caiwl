<?php
require_once("../include/initialize.php");

?>
<?php
// login confirmation
if (isset($_SESSION['USERID'])) {
  redirect(web_root . "admin/index.php");
}
?>



<!-- Bootstrap core CSS -->



<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login | Bimbingan Belajar Fahmi Ramadhan</title>
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
                  <img src="<?php echo web_root ?>images/Full.png" alt="Gambar" width="450" height="450">
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

            <p class="text-center">
              <a href="../index.php">
                <i class="fa fa-arrow-left"></i>
                <span>Back to Home</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->
  <!-- <form class="login100-form validate-form" action="" method="POST">
    <span class="login100-form-title p-b-43">
      Login to continue
    </span>

    <p><?php // echo check_message() 
        ?></p>
    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
      <input class="input100" type="text" name="user_email">
      <span class="focus-input100"></span>
      <span class="label-input100">Username</span>
    </div>


    <div class="wrap-input100 validate-input" data-validate="Password is required">
      <input class="input100" type="password" name="user_pass">
      <span class="focus-input100"></span>
      <span class="label-input100">Password</span>
    </div>


    <div class="container-login100-form-btn">
      <button class="login100-form-btn" type="submit" name="btnLogin">
        Login
      </button>
    </div>

    <div class="text-center p-t-46 p-b-20">
      <span class="txt2">
        <a href="../index.php">
          <i class="fa fa-arrow-left"></i>
          Back to Home
        </a>
      </span>
    </div>
  </form> -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/bootstrap.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?php echo web_root; ?>sneat/assets/js/main.js"></script>
</body>

</html>

<?php

if (isset($_POST['btnLogin'])) {
  $email = trim($_POST['user_email']);
  $upass  = trim($_POST['user_pass']);
  $h_upass = sha1($upass);

  if ($email == '' or $upass == '') {

    message("Invalid Username and Password!", "error");
    redirect("login.php");
  } else {
    //it creates a new objects of member
    $user = new User();
    //make use of the static function, and we passed to parameters
    $res = $user::userAuthentication($email, $h_upass);
    if ($res == true) {
      message("You login as " . $_SESSION['TYPE'] . ".", "success");
      if ($_SESSION['TYPE'] == 'Administrator') {
        redirect(web_root . "admin/index.php");
      } else {
        redirect(web_root . "admin/login.php");
      }
    } else {
      message("Account does not exist! Please contact Administrator.", "error");
      redirect(web_root . "admin/login.php");
    }
  }
}
?>