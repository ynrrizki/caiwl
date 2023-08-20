<div class="row">
  <div class="card">
    <div class="card-body">
      <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Add New User</h1>
          </div>
          <!-- /.col-lg-12 -->
        </div>

        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="user_name">Name:</label>

            <div class="col-md-8">
              <input name="deptid" type="hidden" value="">
              <input class="form-control input-sm" id="user_name" name="user_name" placeholder="Account Name" type="text" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="user_email">Username:</label>

            <div class="col-md-8">
              <input name="deptid" type="hidden" value="">
              <input class="form-control input-sm" id="user_email" name="user_email" placeholder="Username" type="text" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="user_pass">Password:</label>

            <div class="col-md-8">
              <input name="deptid" type="hidden" value="">
              <input class="form-control input-sm" id="user_pass" name="user_pass" placeholder="Account Password" type="Password" value="">
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="user_pass">Password Konfirmasi:</label>
            <div class="col-md-8">
              <input name="deptid" type="hidden" value="">
              <input class="form-control input-sm" id="retype_user_pass" name="retype_user_pass" placeholder="Retype Password" type="Password" value="">
            </div>
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-8">
            <label class="col-md-4 control-label" for="idno"></label>

            <div class="col-md-8">
              <button class="btn btn-primary" id="usersave" name="save" type="submit"><strong>Save</strong></button>
              <a href="index.php" class="btn btn-outline-secondary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>List of Users</strong></a>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>