<?php
if (!isset($_SESSION['USERID'])) {
	redirect(web_root . "admin/index.php");
}

?>
<div class="row">
	<div class="fw-bold py-3 mb-4 d-flex justify-content-between align-items-center">
		<h4 class="page-header">Daftar Pertanyaan</h4>
		<a href="index.php?view=add" class="btn btn-primary">Tambah Data</a>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col">
		<div class="card">
			<div class="card-body">
				<form action="controller.php?action=delete" Method="POST">
					<table id="example" class="table table-bordered table-hover" cellspacing="0" style="font-size:12px">
						<thead>
							<tr>
								<th>No.</th>
								<th>Pelajaran</th>
								<th>Pertanyaan</th>
								<th>A</th>
								<th>B</th>
								<th>C</th>
								<th>D</th>
								<th>Jawaban</th>
								<th width="10%">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$mydb->setQuery("SELECT * FROM `tbllesson` l, `tblexercise` e WHERE l.`LessonID`=e.`LessonID`");
							$cur = $mydb->loadResultList();

							foreach ($cur as $result) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td>' . $result->LessonTitle . '</a></td>';
								echo '<td>' . $result->Question . '</a></td>';
								echo '<td>' . $result->ChoiceA . '</a></td>';
								echo '<td>' . $result->ChoiceB . '</a></td>';
								echo '<td>' . $result->ChoiceC . '</a></td>';
								echo '<td>' . $result->ChoiceD . '</a></td>';
								echo '<td>' . $result->Answer . '</a></td>';
								echo '<td > <a title="Edit" href="index.php?view=edit&id=' . $result->ExerciseID . '" class="btn btn-icon me-2 btn-primary btn-sm" ><i class="tf-icons bx bx-pencil" ></i></i></a>
										   <a title="Delete" href="controller.php?action=delete&id=' . $result->ExerciseID . '" class="btn btn-icon me-2 btn-danger btn-sm" ><i class="tf-icons bx bx-trash"></i> </a>
										   </td>';
								echo '</tr>';
							}
							?>
						</tbody>

					</table>


				</form>
			</div>
		</div>
	</div>
</div>