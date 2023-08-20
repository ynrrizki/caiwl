<?php
if (!isset($_SESSION['USERID'])) {
	redirect(web_root . "admin/index.php");
}

?>

<div class="row">
	<div class="fw-bold py-3 mb-4 d-flex justify-content-between align-items-center">
		<h4 class="page-header">Daftar Pelajaran</h4>
		<a href="index.php?view=add" class="btn btn-primary">Tambah Data</a>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col">
		<div class="card">
			<div class="card-body">
				<form action="controller.php?action=delete" Method="POST">
					<div class="table-responsive">
						<table id="example" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">

							<thead>
								<tr>
									<th width="5%">#</th>
									<th>Chapter</th>
									<th>Title</th>
									<th>File Type</th>
									<th width="30%">Action</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$mydb->setQuery("SELECT * 
											FROM  `tbllesson`");
								$cur = $mydb->loadResultList();

								foreach ($cur as $result) :
								?>
									<tr>
										<td width="5%" align="center"></td>
										<td><?= $result->LessonChapter; ?></td>
										<td><?= $result->LessonTitle; ?></td>
										<td><?= $result->Category; ?></td>

										<?php
										if ($result->Category == "Video") {
											# code...
											$view = "index.php?view=playvideo&id=" . $result->LessonID;
										} else {
											$view = "index.php?view=viewpdf&id=" . $result->LessonID;
										}
										?>

										<td align="center">
											<a title="Edit Details" href="<?= 'index.php?view=edit&id=' . $result->LessonID; ?>" class="btn me-2 btn-primary btn-sm"> Edit</a>
											<a title="Change File" href="<?= 'index.php?view=uploadfile&id=' . $result->LessonID; ?>" class="btn me-2 btn-primary btn-sm"> Change File</a>
											<a title="View Files" href="<?= $view; ?>" class="btn me-2 btn-primary btn-sm">View</a>
											<a title="Delete" href="<?= 'controller.php?action=delete&id=' . $result->LessonID; ?>" class="btn me-2 btn-danger btn-sm">
												Delete
											</a>
										</td>
									</tr>
								<?php
								endforeach;
								?>
							</tbody>

						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>