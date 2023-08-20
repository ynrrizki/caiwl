<?php
// if (!isset($_SESSION['TYPE'])=='Administrator'){
//     redirect(web_root."index.php");
//    }

?>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">List of Users <small>| <label class="label label-xs" style="font-size: 12px"><a href="index.php?view=add"> <i class="fa fa-plus-circle fw-fa"></i> New</a></label> |</small></h1>

	</div>
	<!-- /.col-lg-12 -->
</div>
<form action="controller.php?action=delete" Method="POST">
	<div class="card">
		<div class="card-body">
			<table id="example" class="table table-hover table-bordered" cellspacing="0" style="font-size:12px">

				<thead>
					<tr>
						<th>No.</th>
						<th>
							<!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
							Account Name
						</th>
						<th>Username</th>
						<th width="10%">Action</th>

					</tr>
				</thead>
				<tbody>
					<?php
					$mydb->setQuery("SELECT * FROM  `tblusers`");
					$cur = $mydb->loadResultList();

					foreach ($cur as $result) {
						echo '<tr>';
						echo '<td width="5%" align="center"></td>';
						echo '<td>' . $result->NAME . '</a></td>';
						echo '<td>' . $result->UEMAIL . '</td>';
						// echo '<td>'. $result->TYPE.'</td>';
						echo '<td> <a title="Edit" href="index.php?view=edit&id=' . $result->USERID . '" class="btn btn-icon me-2 btn-primary btn-sm" ><i class="tf-icons bx bx-pencil" ></i></a>
							   <a title="Delete" href="controller.php?action=delete&id=' . $result->USERID . '" class="btn btn-icon me-2 btn-danger btn-sm" ><i class="tf-icons bx bx-trash"></i> </a>
							   </td>';
						echo '</tr>';
					}
					?>
				</tbody>

			</table>
		</div>
	</div>
</form>