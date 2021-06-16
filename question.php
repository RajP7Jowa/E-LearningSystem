<?php
$studentid = $_SESSION['StudentID'];
$score = 0;
$id = $_GET['id'];
if ($id == '') {
	redirect("index.php");
}

$sql = "SELECT SUM(Score) as 'SCORE' FROM tblscore  WHERE LessonID='{$id}' and StudentID='{$studentid}' AND Submitted=1";
$mydb->setQuery($sql);
$row = $mydb->executeQuery();
$ans = $mydb->loadSingleResult();
$score  = $ans->SCORE;

if ($score != null) {
	# code...   
	redirect("index.php?q=quizresult&id={$id}&score={$score}");
}
?>

<h1>Question</h1>
<div class="text-wrap vcenter">
  <h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"> Choose the correct answer</h4>
</div>
<div style="height:250px;overflow-y:auto; font-size: small; padding-left:10px">
	<?php
	$sql = "SELECT * FROM tblexercise WHERE LessonID = '{$id}'";
	$mydb->setQuery($sql);
	$cur = $mydb->loadResultList();

	foreach ($cur as $res) {
		# code...

	?>
		<form>
			<div><?php echo $res->Question; ?></div>
			<div class="col-md-3"><input class="radios" type="radio" id="ChoiceA" data-id="<?php echo $res->ExerciseID; ?>" name="choices" value="<?php echo $res->ChoiceA; ?>"> A. <?php echo $res->ChoiceA; ?></div>
			<div class="col-md-3"><input class="radios" type="radio" id="ChoiceB" data-id="<?php echo $res->ExerciseID; ?>" name="choices" value="<?php echo $res->ChoiceB; ?>"> B. <?php echo $res->ChoiceB; ?></div>
			<div class="col-md-3"><input class="radios" type="radio" id="ChoiceC" data-id="<?php echo $res->ExerciseID; ?>" name="choices" value="<?php echo $res->ChoiceC; ?>"> C. <?php echo $res->ChoiceC; ?></div>
			<div class="col-md-3"><input class="radios" type="radio" id="ChoiceD" data-id="<?php echo $res->ExerciseID; ?>" name="choices" value="<?php echo $res->ChoiceD; ?>"> D. <?php echo $res->ChoiceD; ?></div>
		</form>
	<?php } ?>
</div>
<form action="processscore.php" method="POST" class="pt-3 text-right" >
	<input type="hidden" name="LessonID" value="<?php echo $id ?>">
	<button class="btn btn-md btn-primary" type="submit" name="btnSubmit">Submit <i class="fa fa-arrow-right"></i></button>
</form> 