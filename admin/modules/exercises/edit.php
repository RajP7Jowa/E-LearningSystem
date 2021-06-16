<?php
@$id = $_GET['id'];
if ($id == '') {
  redirect("index.php");
}
$exercise = new Exercise();
$res = $exercise->single_exercise($id);

?>
<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
  <div class="nav navbar-nav pl-0">
    <ol class="breadcrumb red bg-dark text-white">
      <li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
      <li class="breadcrumb-item"><i class="fa fa-edit mx-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Exercises</a></li>
      <li class="breadcrumb-item active"><i class="fa fa-circle mx-2 white-text" aria-hidden="true"></i>Edit</li>
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



            <form class="form-horizontal span6" action="controller.php?action=edit" method="POST" style="margin-top: 20px;">
              <div class="row">
                <div class="col-lg-12">
                  <h1 class="page-header">Update Question</h1>
                </div>
                <!-- /.col-lg-12 -->
              </div>
              <hr class="mb-5">

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="Lesson">Lesson:</label>

                  <div class="col-md-8">
                    <input type="hidden" name="ExerciseID" value="<?php echo $res->ExerciseID; ?>">
                    <select class="form-control" name="Lesson">
                      <?php
                      $sql = "SELECT * FROM `tbllesson` WHERE LessonID=" . $res->LessonID;
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      foreach ($cur as $lesson) {
                        # code...
                        echo '<option SELECTED value=' . $lesson->LessonID . '>' . $lesson->LessonTitle . '</option>';
                      }

                      $sql = "SELECT * FROM `tbllesson` WHERE LessonID!=" . $res->LessonID;
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      foreach ($cur as $lesson) {
                        # code...
                        echo '<option value=' . $lesson->LessonID . '>' . $lesson->LessonTitle . '</option>';
                      }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="Question">Question:</label>

                  <div class="col-md-8">
                    <textarea class="form-control input-sm" id="Question" name="Question" placeholder="Question Name" type="text"><?php echo $res->Question; ?></textarea>

                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="ChoiceA">A:</label>

                  <div class="col-md-8">

                    <input class="form-control input-sm" id="ChoiceA" name="ChoiceA" placeholder="" type="text" value="<?php echo $res->ChoiceA; ?>">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="ChoiceB">B:</label>

                  <div class="col-md-8">

                    <input class="form-control input-sm" id="ChoiceB" name="ChoiceB" placeholder="" type="text" value="<?php echo $res->ChoiceB; ?>" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="ChoiceC">C:</label>

                  <div class="col-md-8">

                    <input class="form-control input-sm" id="ChoiceC" name="ChoiceC" placeholder="" type="text" value="<?php echo $res->ChoiceC; ?>" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="ChoiceD">D:</label>

                  <div class="col-md-8">
                    <input class="form-control input-sm" id="ChoiceD" name="ChoiceD" placeholder="" type="text" value="<?php echo $res->ChoiceD; ?>" required>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="Answer">Answer:</label>

                  <div class="col-md-8">

                    <input class="form-control input-sm" id="Answer" name="Answer" placeholder="Answer" type="text" value="" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8">
                  <label class="col-md-4 control-label" for="idno"></label>

                  <div class="col-md-8">
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