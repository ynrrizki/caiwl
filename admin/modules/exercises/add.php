<?php
if (!isset($_SESSION['USERID'])) {
  redirect(web_root . "admin/index.php");
}

// $autonum = New Autonumber();
// $res = $autonum->single_autonumber(2);

?>
<div class="row">
  <div class="col-lg-12">
    <h4 class="fw-bold py-3 mb-4">Tambah Pertanyaan</h4>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <form class="form-horizontal span6" action="controller.php?action=add" method="POST" style="margin-top: 20px;">
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="Lesson">Pelajaran:</label>

              <div class="col-md-8">
                <select class="form-control" name="Lesson">
                  <?php
                  $sql = "SELECT * FROM `tbllesson`";
                  $mydb->setQuery($sql);
                  $cur = $mydb->loadResultList();
                  foreach ($cur as $res) {
                    # code...
                    echo '<option value=' . $res->LessonID . '>' . $res->LessonTitle . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="Question">Pertanyaan:</label>

              <div class="col-md-8">
                <textarea class="form-control input-sm" id="Question" name="Question" placeholder="Nama Pertanyaan" type="text"></textarea>

              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="ChoiceA">A:</label>

              <div class="col-md-8">

                <input class="form-control input-sm" id="ChoiceA" name="ChoiceA" placeholder="" type="text" value="">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="ChoiceB">B:</label>

              <div class="col-md-8">

                <input class="form-control input-sm" id="ChoiceB" name="ChoiceB" placeholder="" type="text" value="" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="ChoiceC">C:</label>

              <div class="col-md-8">

                <input class="form-control input-sm" id="ChoiceC" name="ChoiceC" placeholder="" type="text" value="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="ChoiceD">D:</label>

              <div class="col-md-8">
                <input class="form-control input-sm" id="ChoiceD" name="ChoiceD" placeholder="" type="text" value="" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="Answer">Jawaban:</label>

              <div class="col-md-8">

                <input class="form-control input-sm" id="Answer" name="Answer" placeholder="Jawaban" type="text" value="" required>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-8">
              <label class="col-md-4 control-label" for="idno"></label>

              <div class="col-md-8">
                <button class="btn btn-primary" name="save" type="submit">Save</button>
                <a href="index.php" class="btn btn-outline-secondary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Kembali</strong></a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>