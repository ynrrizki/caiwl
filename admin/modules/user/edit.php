<?php
// if (!isset($_SESSION['TYPE'])=='Administrator'){
//    redirect(web_root."index.php");
//   }

@$user_id = $_GET['id'];
if ($user_id == '') {
  redirect("index.php");
}
$user = new User();
$singleuser = $user->single_user($user_id);

?>

<div class="row">
  <div class="col-lg-12">
    <h4 class="fw-bold py-3 mb-4">Update Pengguna</h4>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal span6" action="controller.php?action=edit" method="POST">
          <input class="form-control input-sm" id="user_id" name="user_id" placeholder="Account Id" type="Hidden" value="<?php echo $singleuser->USERID; ?>">

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="user_name">Nama:</label>
              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="user_name" name="user_name" placeholder="Nama Akun" type="text" value="<?php echo $singleuser->NAME; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="user_email">Username:</label>

              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="user_email" name="user_email" placeholder="Username" type="text" value="<?php echo $singleuser->UEMAIL; ?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="user_pass">Password:</label>
              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="user_pass" name="user_pass" placeholder="Password Akun" type="Password" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="user_pass">Password Konfirmasi:</label>
              <div class="col-md-8">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder="Password Konfirmasi" type="Password" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="idno"></label>
              <div class="col-md-8">
                <button class="btn btn-primary" id="usersave" name="save" type="submit">Simpan</button>
                <a href="index.php" class="btn btn-outline-secondary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Kembali</strong></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>