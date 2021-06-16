<?php
require_once("../../../include/initialize.php");
if (!isset($_SESSION['USERID'])) {
	redirect(web_root . "admin/index.php");
}

$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';

switch ($action) {
	case 'add':
		doInsert();
		break;

	case 'edit':
		doEdit();
		break;

	case 'delete':
		doDelete();
		break;
}

function doInsert()
{

	if (isset($_POST['save'])) {

		$ExerciseID  = date('Yis');

		$exercise = new Exercise();
		$exercise->ExerciseID 			= $ExerciseID;
		$exercise->LessonID 			= $_POST['Lesson'];
		$exercise->Question				= $_POST['Question'];
		$exercise->Answer				= $_POST['Answer'];
		$exercise->ChoiceA 				= $_POST['ChoiceA'];
		$exercise->ChoiceB				= $_POST['ChoiceB'];
		$exercise->ChoiceC				= $_POST['ChoiceC'];
		$exercise->ChoiceD				= $_POST['ChoiceD'];
		$exercise->create();
		message("New Question created successfully!", "success");
		redirect("index.php");
	}
}

function doEdit()
{
	if (isset($_POST['save'])) {
		$id = $_POST['ExerciseID'];

		$exercise = new Exercise();
		$exercise->LessonID 			= $_POST['Lesson'];
		$exercise->Question				= $_POST['Question'];
		$exercise->Answer				= $_POST['Answer'];
		$exercise->ChoiceA 				= $_POST['ChoiceA'];
		$exercise->ChoiceB				= $_POST['ChoiceB'];
		$exercise->ChoiceC				= $_POST['ChoiceC'];
		$exercise->ChoiceD				= $_POST['ChoiceD'];
		$exercise->update($id);

		message("Question has been updated!", "success");
		redirect("index.php");
	}
}


function doDelete()
{
	$id = 	$_GET['id'];

	$exercise = new Exercise();
	$exercise->delete($id);

	message("Question already Deleted!", "info");
	redirect('index.php');
}
