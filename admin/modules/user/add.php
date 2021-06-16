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
            <!--  -->
            <?php check_message(); ?>



            <form class="form-horizontal span6" action="controller.php?action=add" method="POST" onsubmit="return validatedpass()">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">Add New User</h1>
                </div>
                <!-- /.col-lg-12 -->
              </div>
              <hr class="mb-5">
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
                  <label class="col-md-4 control-label" for="user_pass">Retype Password:</label>

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
                    <button class="btn btn_kcctc" id="usersave" name="save" type="submit"><strong>Save</strong></button>
                    <a href="index.php" class="btn btn_kcctc"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>List of Users</strong></a>
                  </div>
                </div>
              </div>



            </form>

          </div>
        </div>
      </div>
    </div>

  </div>
</main>