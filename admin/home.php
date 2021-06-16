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
    </ol>
  </div>

</nav>
<main class="page-content">
  <div class="container-fluid">
    <div class="row">
      <div class="form-group col-md-12">
        <div class="content">
          <div class="module">
          <?php check_message(); ?>

            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                  <div class="card rounded-0 pt-5 pb-4 pl-0 pr-0 shadow-sm ">
                    <img src="<?php echo web_root; ?>assets/images/users.png" class="card-img-top rounded-0" alt="Angular pro sidebar">
                    <div class="card-body text-center pt-5">
                      <h6 class="card-title">Users</h6> <br>
                      <a href="<?php echo web_root; ?>admin/modules/user/index.php?view=add" class="btn btn-primary btn-sm">Add new</a>
                      <a href="<?php echo web_root; ?>admin/modules/user/index.php" class="btn btn-success btn-sm">List</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                  <div class="card rounded-0 pt-5 pb-4 pl-0 pr-0 shadow-sm ">
                    <img src="<?php echo web_root; ?>assets/images/lession.jpg" class="card-img-top rounded-0" alt="Angular pro sidebar">
                    <div class="card-body text-center pt-5">
                      <h6 class="card-title">Lesson</h6> <br>
                      <a href="<?php echo web_root; ?>admin/modules/lesson/index.php?view=add" class="btn btn-primary btn-sm">Add new</a>
                      <a href="<?php echo web_root; ?>admin/modules/lesson/index.php" class="btn btn-success btn-sm">List</a>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                  <div class="card rounded-0 pt-5 pb-4 pl-0 pr-0 shadow-sm ">
                    <img src="<?php echo web_root; ?>/assets/images/excer.jpg" class="card-img-top rounded-0" alt="Angular pro sidebar">
                    <div class="card-body text-center pt-5">
                      <h6 class="card-title">Exercises</h6> <br>
                      <a href="<?php echo web_root; ?>admin/modules/exercises/index.php?view=add" class="btn btn-primary btn-sm">Add new</a>
                      <a href="<?php echo web_root; ?>admin/modules/exercises/index.php" class="btn btn-success btn-sm">List</a>
                    </div>
                  </div>
                </div>
            
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
</main>