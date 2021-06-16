
<h1><?php echo $title; ?></h1>
<div class="row">
	<div class="container-fluid">
		<div class="row mbr-justify-content-center">
		<!--  -->
		<?php
				$sql = "SELECT * FROM tbllesson";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					echo '<div class="col-md-6"> <a href="index.php?q=question&id=' . $result->LessonID . '" title="click to visit ..." class="wrap"> <div class="ico-wrap"> <span class="mbr-iconfont fa-edit fa"></span></div><div class="text-wrap vcenter"><h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
					' . $result->LessonChapter . '</h4><p class="mbr-fonts-style text1 mbr-text display-6">' . $result->LessonTitle. '</p></div></a></div>';
				}
				?>
		</div>
	</div>
</div>