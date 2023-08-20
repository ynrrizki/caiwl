<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $title; ?> | Bimbingan Belajar Fahmi Ramadhan</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/libs/apex-charts/apex-charts.css" />
  <link rel="stylesheet" href="<?php echo web_root; ?>sneat/assets/vendor/libs/dataTables/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="<?php echo web_root; ?>fonts/font-awesome.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="<?php echo web_root; ?>loginregister.css">
  <link rel="stylesheet" href="<?php echo web_root; ?>assets/iCheck/flat/blue.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo web_root; ?>css/jquery-ui.css">

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo web_root; ?>sneat/assets/js/config.js"></script>

  <style>
    .app-brand-logo {
      width: 55px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>

  <style>
    .form-group {
      margin-bottom: 25px;
    }
  </style>

<body>

  <!-- <section id="navigation">
    <div id="mySidenav" class="sidenav">
      <a href="<?php echo web_root; ?>index.php?q=lesson" id="lesson">Lesson <i class="fa fa-home pull-right"></i></a>
      <a href="<?php echo web_root; ?>index.php?q=exercises" id="exercise">Exercises <i class="fa fa-pencil pull-right"></i></a>
      <a href="<?php echo web_root; ?>index.php?q=download" id="download">Download <i class="fa fa-download pull-right"></i></a>
      <a href="<?php echo web_root; ?>index.php?q=about" id="about">About Us <i class="fa fa-info-circle pull-right"></i></a>
      <a href="logout.php" id="login">Logout <i class="fa fa-sign-out pull-right"></i></a>
    </div>
  </section> -->

  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="<?php echo web_root; ?>admin/index.php" class="app-brand-link">
            <span class="app-brand-logo demo">
              <img src="<?php echo web_root ?>images/Logo.png" alt="Logo" width="100" height="100">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Dashboard</span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item <?= $_SERVER['REQUEST_URI'] === '/caiwl/index.php?q=lesson' ? 'active' : '' ?>">
            <a href="<?php echo web_root; ?>index.php?q=lesson" id="lesson" class=" menu-link">
              <i class="menu-icon tf-icons bx bx-book-open"></i>
              <div data-i18n="Pelajaran">Pelajaran</div>
            </a>
          </li>
          <li class="menu-item <?= $_SERVER['REQUEST_URI'] === '/caiwl/index.php?q=exercises' ? 'active' : '' ?>">
            <a href="<?php echo web_root; ?>index.php?q=exercises" id="exercise" class="menu-link">
              <i class="menu-icon tf-icons bx bx-pencil"></i>
              <div data-i18n="Latihan">Latihan</div>
            </a>
          </li>
          <li class="menu-item <?= $_SERVER['REQUEST_URI'] === '/caiwl/index.php?q=download' ? 'active' : '' ?>">
            <a href="<?php echo web_root; ?>index.php?q=download" class="menu-link">
              <i class="menu-icon tf-icons bx bx-download"></i>
              <div data-i18n="Murid">Download</div>
            </a>
          </li>
          <li class="menu-item <?= $_SERVER['REQUEST_URI'] === '/caiwl/index.php?q=about' ? 'active' : '' ?>">
            <a href="<?php echo web_root; ?>index.php?q=about" class="menu-link">
              <i class="menu-icon tf-icons bx bx-info-circle"></i>
              <div data-i18n="Manajemen Pengguna">About</div>
            </a>
          </li>
        </ul>
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['NAME']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item" href="#">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar avatar-online">
                            <img src="https://ui-avatars.com/api/?name=<?php echo $_SESSION['NAME']; ?>" alt class="w-px-40 h-auto rounded-circle" />
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <span class="fw-semibold d-block"><?php echo $_SESSION['NAME']; ?></span>
                          <small class="text-muted">Admin</small>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                  </li>
                  <li>
                    <a class="dropdown-item" href="<?php echo web_root; ?>admin/logout.php">
                      <i class="bx bx-power-off me-2"></i>
                      <span class="align-middle">Log Out</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!--/ User -->
            </ul>
          </div>
        </nav>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <?php
            check_message();
            // echo $_SERVER['REQUEST_URI']
            ?>
            <?php require_once $content; ?>
          </div>
          <!-- / Content -->

          <!-- Footer -->
          <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
              <div class="mb-2 mb-md-0">
                © Bimbingan Belajar Fahmi Ramadhan
              </div>
            </div>
          </footer>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>
  </div>


  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/bootstrap.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo web_root; ?>sneat/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Main JS -->
  <script src="<?php echo web_root; ?>sneat/assets/js/main.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/dataTables/dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>sneat/assets/vendor/libs/dataTables/dataTables.bootstrap5.min.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
  <script src="<?php echo web_root; ?>assets/iCheck/icheck.min.js"></script>

  <!-- Bootstrap WYSIHTML5 -->
  <script type="text/javascript" src="<?php echo web_root; ?>js/jquery-ui.js"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/autofunc.js"></script>
  <script src="<?php echo web_root; ?>assets/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Page Script -->
  <script>
    $(function() {
      //Add text editor
      $("#compose-textarea").wysihtml5();
    });
  </script>
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      var t = $('#example').DataTable({
        "bSort": false,
        "columnDefs": [{
          "searchable": false,
          "orderable": false,
          "targets": 0
        }],

        //vertical scroll
        // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [
          [1, 'desc']
        ]
      });

      t.on('order.dt search.dt', function() {
        t.column(0, {
          search: 'applied',
          order: 'applied'
        }).nodes().each(function(cell, i) {
          cell.innerHTML = i + 1;
        });
      }).draw();
    });
    $(document).ready(function() {
      var t = $('#example2').DataTable({
        "bSort": false,
        "columnDefs": [{
          "searchable": false,
          "orderable": false,
          "targets": 0
        }],

        //vertical scroll
        // "scrollY":        "300px",
        "scrollCollapse": true,

        //ordering start at column 1
        "order": [
          [1, 'desc']
        ]
      });

      t.on('order.dt search.dt', function() {
        t.column(0, {
          search: 'applied',
          order: 'applied'
        }).nodes().each(function(cell, i) {
          cell.innerHTML = i + 1;
        });
      }).draw();
    });
  </script>

  <script type="text/javascript">
    $('#date_picker').datetimepicker({
      format: 'mm/dd/yyyy',
      language: 'en',
      weekStart: 1,
      todayBtn: 1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
    });
  </script>
  <script>
    function checkall(selector) {
      if (document.getElementById('chkall').checked == true) {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
          chkelement.item(i).checked = true;
        }
      } else {
        var chkelement = document.getElementsByName(selector);
        for (var i = 0; i < chkelement.length; i++) {
          chkelement.item(i).checked = false;
        }
      }
    }

    function checkNumber(textBox) {
      while (textBox.value.length > 0 && isNaN(textBox.value)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
      }
      textBox.value = trim(textBox.value);
    }
    //
    function checkText(textBox) {
      var alphaExp = /^[a-zA-Z]+$/;
      while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
        textBox.value = textBox.value.substring(0, textBox.value.length - 1)
      }
      textBox.value = trim(textBox.value);
    }


    $(document).on("change", ".radios", function() {

      var exerciseid = $(this).data('id');
      var value = $(this).val();

      // alert(value);
      if ($(this).is(':checked')) {
        $.ajax({
          type: "POST",
          url: "validation.php",
          dataType: "text",
          data: {
            ExerciseID: exerciseid,
            Value: value
          },
          success: function(data) {
            // alert(data)
          }
        });
      }


    });

    //    $(function(){
    //   $('input[type="radio"]').change(function(){
    //     if ($(this).is(':checked'))
    //     {
    //       alert($(this).val());
    //       $(this).disabled=true;
    //     }
    //   });
    // });
  </script>

</body>

</html>