<h1 ><?php echo $title; ?></h1>
<div class="row">

	<div class="col-md-6">
		<h3 class="display-5">PDF</h3>

		<hr class="mb-5">

		<div class="container-fluid">
			<div class="row mbr-justify-content-center">
				<?php
				$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					echo ' <a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'"  download title="click to visit ..." class="wrap"> <div class="ico-wrap"> <span class="mbr-iconfont fa-file-pdf-o fa"></span></div><div class="text-wrap vcenter"><h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
					' . $result->LessonChapter . '</h4><p class="mbr-fonts-style text1 mbr-text display-6">' . $result->LessonTitle . '</p></div></a>';
				}
				?>
			</div>
		</div>

	</div>
	<div class="col-md-6">

		<h3 class="display-5">VIDEO</h3>

		<hr class="mb-5">

		<div class="container-fluid">
			<div class="row mbr-justify-content-center">
				<?php
				$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					echo ' <a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" download  title="click to visit ..." class="wrap1"> <div class="ico-wrap"> <span class="mbr-iconfont fa-video-camera fa"></span></div><div class="text-wrap vcenter"><h4 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
					' . $result->LessonChapter . '</h4><p class="mbr-fonts-style text1 mbr-text display-6">' . $result->LessonTitle . '</p></div></a>';
				}
				?>
			</div>
		</div>

	</div>


</div>