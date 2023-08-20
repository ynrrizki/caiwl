<?php
check_message();
?>
<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style>
<div class="row">
	<div class="fw-bold py-3 mb-4 d-flex justify-content-between align-items-center">
		<h4 class="page-header">Daftar Siswa</h4>
	</div>
	<!-- /.col-lg-12 -->
	<div class="col">
		<div class="card">
			<div class="card-body">

				<form action="controller.php?action=delete" Method="POST">
					<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama</th>
								<th>Alamat</th>
								<th>Kontak</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$query = "SELECT * FROM `tblstudent`";
							$mydb->setQuery($query);
							$cur = $mydb->loadResultList();

							foreach ($cur as $result) {
								echo '<tr>';
								echo '<td width="5%" align="center"></td>';
								echo '<td>' . $result->Fname . ' ' . $result->Lname . '</td>';
								echo '<td>' . $result->Address . '</td>';
								echo '<td>' . $result->MobileNo . '</td>';


								echo '</tr>';
							}
							?>
						</tbody>


					</table>
					<div class="btn-group">
						<!-- <a href="index.php?view=add" class="btn btn-default">New</a> -->
						<!-- <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>