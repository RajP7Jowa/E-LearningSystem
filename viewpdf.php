<?php
@$id = $_GET['id'];
if ($id == '') {
  redirect("index.php");
}
$lesson = new Lesson();
$res = $lesson->single_lesson($id);

?> <h1><?php echo $title; ?></h1>
<div class="text-wrap vcenter">
  <h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> <label> Chapter : </label> <?php echo $res->LessonChapter; ?></h4>
  <p class="mbr-fonts-style text1 mbr-text display-6"><label for=""></label> Title : <?php echo $res->LessonTitle; ?></p>
</div>
<div class="container-fluid">
  <embed src="<?php echo web_root . 'admin/modules/lesson/' . $res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div>