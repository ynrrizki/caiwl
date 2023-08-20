<style type="text/css">
  .imgstretch {
    padding: 10px 30px;
  }

  .imgstretch img {
    width: 100%;
    height: 100px;
    object-fit: contain;
  }

  .btn-card {
    transition: transform 0.3s ease;
    background: white;
    border: var(--bs-secondary) solid;
    border-radius: 16px;
    padding: 10px;
  }

  .btn-card:hover {
    transform: translateY(-5px);
  }
</style>

<div class="row">
  <h3 class="fw-bold mb-4">Welcome <?php echo $_SESSION['NAME']; ?></h3>
</div>

<div class="row">
  <div class="col-md">
    <div class="card mb-3">
      <div class="row g-0">
        <?php if ($_SESSION['TYPE'] == "Administrator") : ?>
          <div class="col-lg-6 col-6 my-4">
            <div class="text-center d-flex flex-column align-items-center">
              <!-- <div class="skeleton-rounded btn-card" style="width: 130px; height: 130px;">
                <a href="<?php echo web_root; ?>admin/modules/user/index.php"> <img src="<?php echo web_root; ?>admin/adminMenu/images/user.png" alt="Users image" style="width: 100%; height: 100%; overflow:hidden;" /></a>
              </div> -->
              <div class="btn-card">
                <a href="<?php echo web_root; ?>admin/modules/user/index.php">
                  <i class='bx bx-user' style="font-size: 120px;"></i>
                </a>
              </div>
              <h5 class="text-center mt-2 skeleton" style="min-width: 170px;">Manajemen Pengguna</h5>
            </div>
          </div>
        <?php else : ?>
          <div class="col-lg-6 col-6 my-4">
            <div class="text-center d-flex flex-column align-items-center">
              <div class="skeleton-rounded btn-card" style="width: 130px; height: 130px;">
                <a href="<?php echo web_root; ?>admin/modules/user/index.php"> <img src="<?php echo web_root; ?>admin/adminMenu/images/report1.png" alt="Reports" style="width: 100%; height: 100%; overflow:hidden;" /></a>
              </div>
              <h5 class="text-center mt-2 skeleton" style="min-width: 170px;">Laporan</h5>
            </div>
          </div>
        <?php endif; ?>
        <div class="col-lg-6 col-6 my-4">
          <div class="text-center d-flex flex-column align-items-center">
            <div class="btn-card">
              <a href="<?php echo web_root; ?>admin/modules/lesson/index.php">
                <i class='bx bx-book-alt' style="font-size: 120px;"></i>
              </a>
            </div>
            <h5 class="text-center mt-2 skeleton" style="min-width: 170px;">Pelajaran</h5>
          </div>
        </div>
        <div class="col-lg-6 col-6 my-4">
          <div class="text-center d-flex flex-column align-items-center">
            <div class="btn-card">
              <a href="<?php echo web_root; ?>admin/modules/exercises/index.php">
                <i class='bx bx-pencil' style="font-size: 120px;"></i>
              </a>
            </div>
            <h5 class="text-center mt-2 skeleton" style="min-width: 170px;">Latihan</h5>
          </div>
        </div>
        <div class="col-lg-6 col-6 my-4">
          <div class="text-center d-flex flex-column align-items-center">
            <!-- <div class="skeleton-rounded btn-card" style="height: 130px; width: 130px;">
              <a href="{{ route('auth.logoutAdmin') }}"> <img src="{{ asset('assets/img/icons/dashboard/logout.png') }}" alt="Lembaga image" style="width: 100%; height: 100%; overflow:hidden;" /></a>
            </div> -->
            <div class="btn-card">
              <a href="<?php echo web_root; ?>admin/logout.php">
                <i class='bx bx-log-out' style="font-size: 120px;"></i>
              </a>
            </div>
            <h5 class="text-center mt-2 skeleton" style="min-width: 170px;">Logout</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>