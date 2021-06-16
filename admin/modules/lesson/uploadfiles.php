<?php
if (!isset($_SESSION['USERID'])) {
  redirect(web_root . "admin/index.php");
}

@$id = $_GET['id'];
if ($id == '') {
  redirect("index.php");
}
$lesson = new Lesson();
$res = $lesson->single_lesson($id);

?>

<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  <div class="nav navbar-nav pl-0">
    <ol class="breadcrumb red bg-dark text-white">
      <li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
      <li class="breadcrumb-item"><i class="fa fa-list mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Lesson</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>Upload Video</li>
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


            <form class="form-horizontal span6" action="controller.php?action=updatefiles" method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">Update Files</h1>
                </div>
                <!-- /.col-lg-12 -->
              </div>
              <hr class="mb-5">

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for="LessonChapter">Chapter:</label>

                  <div class="col-md-10">
                    <input name="LessonID" type="hidden" value="<?php echo $res->LessonID; ?>">
                    <label class="control-label"><?php echo $res->LessonChapter; ?></label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for="LessonTitle">Title:</label>

                  <div class="col-md-10">
                    <input name="deptid" type="hidden" value="">
                    <label class="control-label"><?php echo $res->LessonTitle; ?></label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for="Category">File Type:</label>

                  <div class="col-md-10">
                    <input name="deptid" type="hidden" value="">
                    <label class="control-label"><?php echo $res->Category ?></label>
                  </div>
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2" align="right" for="file">Upload File:</label>

                  <div class="col-md-10">
                    <input type="file" name="file" value="<?php echo $res->FileLocation; ?>" />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11">
                  <label class="col-md-2 control-label" for="idno"></label>

                  <div class="col-md-10">
                    <button class="btn btn-primary btn-sm" name="save" type="submit"><span class="fa fa-save fw-fa"></span> Save</button>
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