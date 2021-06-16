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
      <li class="breadcrumb-item"><i class="fa fa-list mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Library</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>Data</li>
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


            <h2><?php echo $title; ?></h2>

            <hr class="mb-5">

            <p style="font-size: 18px;font-weight: bold;">Chapter : <?php echo $res->LessonChapter; ?> | Title : <?php echo $res->LessonTitle; ?></p>
            <div class="container">
              <embed src="<?php echo web_root . 'admin/modules/lesson/' . $res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</main>