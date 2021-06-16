<style type="text/css">
    .card img {
        width: auto;
        height: 150px;
    }
</style>

<nav class="page-content navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%;">
    <div class="nav navbar-nav pl-0">
        <ol class="breadcrumb red bg-dark text-white">
            <li class="breadcrumb-item"><i class="fa fa-home mr-2 white-text" aria-hidden="true"></i><a class="white-text" href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><i class="fa fa-table mx-2 white-text" aria-hidden="true"></i>Gallery</li>
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

                        <!-- Video Gallery - START -->
                        <div class="container-fluid pb-video-container">
                            <div class="col-md-12">
                                <h3 class="">Video Gallery</h3>

                                <hr class="mb-5">
                                <div class="row">
                                    <?php

                                    $mydb->setQuery("SELECT * FROM `tbllesson` ");
                                    $cur = $mydb->loadResultList();

                                    foreach ($cur as $result) {

                                        if ($result->Category == 'Video') {


                                    ?>
                                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                                <div class="card rounded-0 shadow-sm ">
                                                    <video controls class="pb-video-frame">
                                                        <source src="<?php echo web_root . 'admin/modules/lesson/' . $result->FileLocation; ?>" type="video/mp4">
                                                        <source class="pb-video-frame" src="<?php echo web_root . 'admin/modules/lesson/' . $result->FileLocation; ?>" type="video/ogg">
                                                    </video>
                                                    <div class="card-body text-center">
                                                        <dl>
                                                            <dt>
                                                                <?php echo $result->LessonChapter; ?>
                                                            </dt>
                                                            <dd>
                                                                <?php echo $result->LessonTitle; ?>
                                                            </dd>
                                                        </dl>

                                                    </div>
                                                </div>
                                            </div>


                                    <?php
                                        }
                                    }
                                    ?>

                                </div>

                            </div>
                        </div>
                        <style>
                            .stretch video {
                                width: 100%;
                            }

                            .pb-video {
                                border: 1px solid #e6e6e6;
                                padding: 5px;
                            }

                            .pb-video-frame {
                                background-color: rgba(0, 0, 0, 0.5);
                            }

                            .pb-video-frame:hover {
                                background-color: rgba(0, 0, 0, 1);
                            }

                            .pb-row {
                                margin-bottom: 10px;
                            }
                        </style>

                        <!-- Video Gallery - END -->

                    </div>

                </div>
            </div>
        </div>
    </div>

    </div>
</main>