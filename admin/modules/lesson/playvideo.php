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
<style type="text/css">
  .row iframe {
    width: 100%;
    height: 70%;
  }
</style>


<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  <div class="nav navbar-nav pl-0">
    <ol class="breadcrumb red bg-dark text-white">
      <li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
      <li class="breadcrumb-item"><i class="fa fa-list mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Lesson</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>Play Video</li>
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

            <h1><?php echo $title; ?></h1>


            <hr class="mb-5">

            <div class="container">
              <video width="50%" controls>
                <source src="<?php echo web_root . 'admin/modules/lesson/' . $res->FileLocation; ?>" type="video/mp4">
                <source src="<?php echo web_root . 'admin/modules/lesson/' . $res->FileLocation; ?>" type="video/ogg">
              </video>

              <div class="col-lg-12">Description</div>
              <div class="col-lg-12">
                <label class="col-md-2" class="control-label">Chapter :</label>
                <label class="col-md-10" class="control-label"><?php echo $res->LessonChapter; ?></label>
              </div>
              <div class="col-lg-12">
                <label class="col-md-2" class="control-label">Title : </label>
                <label class="col-md-10" class="control-label"><?php echo $res->LessonTitle; ?></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>