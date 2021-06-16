<?php
if (!isset($_SESSION['TYPE']) == 'Administrator') {
	redirect(web_root . "index.php");
}

?>
<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
	<div class="nav navbar-nav pl-0">
		<ol class="breadcrumb red bg-dark text-white">
			<li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
			<li class="breadcrumb-item"><i class="fa fa-users mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Users</a></li>
			<li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>List</li>
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
							<h1 class="page-header">List of Users <a href="index.php?view=add" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> New</a></h1>
						</div>

						<hr class="mb-5">


						<form action="controller.php?action=delete" Method="POST">
							<table id="example" class="datatable-1 table table-hover table-bordered" cellspacing="0" style="font-size:12px">
								<thead>
									<tr>
										<th> Account Name</th>
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
										echo '<td>' . $result->NAME . '</a></td>';
										echo '<td>' . $result->UEMAIL . '</td>';
										echo '<td align="center" class="btn-group"> <a title="Edit" href="index.php?view=edit&id=' . $result->USERID . '" class="btn btn-primary btn-xs" >Edit</a>
				  					 <a title="Delete" href="controller.php?action=delete&id=' . $result->USERID . '" class="btn btn-danger btn-xs" >Delete</a>
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

	</div>
</main>