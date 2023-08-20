<?php  
require_once ("include/initialize.php"); 
if (isset($_SESSION['StudentID'])) {
  # code...
  redirect('index.php');
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register | Bimbingan Belajar Fahmi Ramadhan</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="icon" type="image/png" href="images/logo.png" />
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
                <img src="images/Full.png" alt="Gambar" width="400" height="400">
              </a>
            </div>
              <!-- /Logo -->
              <form id="formAuthentication" class="mb-3" action="" method="POST">
              <div class="mb-3">
                  <label for="FNAME" class="form-label">First name</label>
                  <input
                    type="FNAME"
                    class="form-control"
                    id="FNAME"
                    name="FNAME"
                    placeholder="First Name"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="LNAME" class="form-label">Last name</label>
                  <input
                    type="LNAME"
                    class="form-control"
                    id="LNAME"
                    name="LNAME"
                    placeholder="First Name"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="ADDRESS" class="form-label">Address</label>
                  <input
                    type="ADDRESS"
                    class="form-control"
                    id="ADDRESS"
                    name="ADDRESS"
                    placeholder="Address"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="PHONE" class="form-label">Contact Me</label>
                  <input
                    type="PHONE"
                    class="form-control"
                    id="PHONE"
                    name="PHONE"
                    placeholder="Contact Me"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="USERNAME" class="form-label">Username</label>
                  <input
                    type="text"
                    class="form-control"
                    id="USERNAME"
                    name="USERNAME"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="PASS"
                      id="PASS"
                      class="form-control"
                      name="PASS"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" name="btnRegister" type="submit">Sign up</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="login.php"><i class="fa fa-arrow-left"></i> Back to Login</a>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>


<?php 
if (isset($_POST['btnRegister'])) {
    # code...  

    $student = New Student(); 
    $student->Fname         = $_POST['FNAME']; 
    $student->Lname         = $_POST['LNAME'];
    $student->Address       = $_POST['ADDRESS']; 
    $student->MobileNo         = $_POST['PHONE'];  
    $student->STUDUSERNAME      = $_POST['USERNAME'];
    $student->STUDPASS      = sha1($_POST['PASS']); 
    $student->create();  

    message("Your now succefully registered. You can login now!","success");
    redirect("register.php");
}

