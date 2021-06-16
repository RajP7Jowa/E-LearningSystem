<style type="text/css">
	#example {
		white-space: nowrap;
	}
</style>
<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
	<div class="nav navbar-nav pl-0">
		<ol class="breadcrumb red bg-dark text-white">
			<li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
			<li class="breadcrumb-item"><i class="fa fa-mortar-board  mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Students</a></li>
			<li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>Add</li>
		</ol>
	</div>

</nav>
<main class="page-content pr-5">
	<div class="container-fluid">
		<div class="row">
			<div class="form-group col-md-12">
				<div class="content">
					<div class="module">
						<!--  -->
						<?php check_message(); ?>

						<div class="module-head"> 
							<h1>List of Student</h1> <a href="admin/modules/modstudent/index.php?view=add" class="btn btn-primary pull-right"><i class="fa fa-plus "></i> New</a>

						</div>

						<hr class="mb-5">

						<form action="controller.php?action=delete" Method="POST">
							<table id="example" class="datatable-1 table table-striped table-bordered table-hover" cellspacing="0" style="font-size:12px">

								<thead>
									<tr>
										<th>Name</th>
										<th>Address</th>
										<th>Contact#</th>

									</tr>
								</thead>

								<tbody>
									<?php
									$query = "SELECT * FROM `tblstudent`";
									$mydb->setQuery($query);
									$cur = $mydb->loadResultList();

									foreach ($cur as $result) {
										echo '<tr>';
										echo '<td>' . $result->Fname . ' ' . $result->Lname . '</td>';
										echo '<td>' . $result->Address . '</td>';
										echo '<td>' . $result->MobileNo . '</td>';


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

	</div>
</main>