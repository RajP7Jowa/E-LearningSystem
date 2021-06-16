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

            <div class="container">
              <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-lg-12">
                    <h1 class="page-header">New Student</h1>
                  </div>
                  <!-- /.col-lg-12 -->
                </div>

                <hr class="mb-5">

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="FNAME">First Name:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="FNAME" name="FNAME" placeholder="First Name" type="text" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="MNAME">Middle Name:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="MNAME" name="MNAME" placeholder="Middle Name" type="text" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="LNAME">Last Name:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="PHONE">Contact No.:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="PHONE" name="PHONE" placeholder="Contact Number" type="text" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="EMAILADD">Email Address:</label>

                    <div class="col-md-8">
                      <input class="form-control input-sm" id="EMAILADD" name="EMAILADD" placeholder="Example@gmail.com" type="email" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-8">
                    <label class="col-md-4 control-label" for="idno"></label>

                    <div class="col-md-8">
                      <button class="btn btn_kcctc" name="studsave" type="submit"><strong>Save</strong></button>
                      <a href="index.php" class="btn btn_kcctc" name="back" type="submit"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;List Of Students</a>
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <div class="rows">
                    <div class="col-md-6">
                      <label class="col-md-6 control-label" for="otherperson"></label>

                      <div class="col-md-6">

                      </div>
                    </div>

                    <div class="col-md-6" align="right">


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