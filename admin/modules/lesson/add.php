<?php
if (!isset($_SESSION['USERID'])) {
  redirect(web_root . "admin/index.php");
}

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

?>
<div class="row">
  <div class="col-lg-12">
    <h4 class="fw-bold py-3 mb-4">Tambah Pelajaran</h4>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="col-md-11">
              <label class="col-md-2 control-label" for="LessonChapter">Chapter:</label>

              <div class="col-md-10">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="LessonChapter" name="LessonChapter" placeholder="Chapter" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <label class="col-md-2 control-label" for="LessonTitle">Title:</label>

              <div class="col-md-10">
                <input name="deptid" type="hidden" value="">
                <input class="form-control input-sm" id="LessonTitle" name="LessonTitle" placeholder="Title" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <label class="col-md-2 control-label" for="Category">Select File Type:</label>

              <div class="col-md-10">
                <input name="deptid" type="hidden" value="">
                <select class="form-control input-sm" id="Category" name="Category">
                  <option>Docs</option>
                  <option>Video</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <label class="col-md-2 control-label" for="file">Upload File:</label>
              <div class="col-md-10">
                <input class="form-control" name="file" type="file" />
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <label class="col-md-2 control-label" for="idno"></label>
              <div class="col-md-10">
                <button class="btn btn-primary" name="save" type="submit">Simpan</button>
                <a href="index.php" class="btn btn-outline-secondary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Kembali</strong></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>