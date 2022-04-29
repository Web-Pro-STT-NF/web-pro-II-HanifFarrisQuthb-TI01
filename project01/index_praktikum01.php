<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>
</head>

  <!-- Head -->
  <?php
  include "pages/main/head.php";
  ?>
  <!-- /.head -->

  <!-- Navbar -->
  <?php
  include "pages/main/navbar.php";
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include "pages/main/sidebar.php";
  ?>
  <!-- /.sidebar -->

  <!-- Class BMI Function -->
  <?php
  include "pages/projects/project01/class/class_bmipasien.php";
  ?>
  <!-- /. bmi function -->

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 1</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Praktikum01</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12" id="accordion">
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                01_variable
                            </h4>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 col-sm-12">
                              <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-user-tab" data-toggle="pill" href="#custom-tabs-one-user" role="tab" aria-controls="custom-tabs-one-user" aria-selected="true">User</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-system-tab" data-toggle="pill" href="#custom-tabs-one-system" role="tab" aria-controls="custom-tabs-one-system" aria-selected="false">System</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-konstan-tab" data-toggle="pill" href="#custom-tabs-one-konstan" role="tab" aria-controls="custom-tabs-one-konstan" aria-selected="false">Konstan</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-user" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                      <a href="pages/projects/praktikum01/01_variable/01_variable_user.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/01_variable/01_variable_user.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-system" role="tabpanel" aria-labelledby="custom-tabs-one-system-tab">
                                      <a href="pages/projects/praktikum01/01_variable/02_variable_system.php" target="_blank">Click Me!</a>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-konstan" role="tabpanel" aria-labelledby="custom-tabs-one-konstan-tab">
                                    <a href="pages/projects/praktikum01/01_variable/03_variable_konstan.php" target="_blank">Click Me!</a>
                                      <hr>
                                    <?php include_once "pages/projects/praktikum01/01_variable/03_variable_konstan.php" ?>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                02_fungsi_array
                            </h4>
                        </div>
                    </a>
                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 col-sm-12">
                              <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-buah-tab" data-toggle="pill" href="#custom-tabs-one-buah" role="tab" aria-controls="custom-tabs-one-buah" aria-selected="true">Array Buah</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-sort-tab" data-toggle="pill" href="#custom-tabs-one-sort" role="tab" aria-controls="custom-tabs-one-sort" aria-selected="false">Sort</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-pop-tab" data-toggle="pill" href="#custom-tabs-one-pop" role="tab" aria-controls="custom-tabs-one-pop" aria-selected="false">Pop</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-push-tab" data-toggle="pill" href="#custom-tabs-one-push" role="tab" aria-controls="custom-tabs-one-push" aria-selected="true">Push</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-shift-tab" data-toggle="pill" href="#custom-tabs-one-shift" role="tab" aria-controls="custom-tabs-one-shift" aria-selected="false">Shift</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-unshift-tab" data-toggle="pill" href="#custom-tabs-one-unshift" role="tab" aria-controls="custom-tabs-one-unshift" aria-selected="false">Unshift</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-buah" role="tabpanel" aria-labelledby="custom-tabs-one-buah-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/00_array_buah.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/00_array_buah.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-sort" role="tabpanel" aria-labelledby="custom-tabs-one-sort-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/01_fungsi_array_sort.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/01_fungsi_array_sort.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-pop" role="tabpanel" aria-labelledby="custom-tabs-one-pop-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/03_fungsi_array_pop.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/02_fungsi_array_pop.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-push" role="tabpanel" aria-labelledby="custom-tabs-one-push-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/03_fungsi_array_push.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/03_fungsi_array_push.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-shift" role="tabpanel" aria-labelledby="custom-tabs-one-shift-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/04_fungsi_array_shift.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/04_fungsi_array_shift.php" ?>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-unshift" role="tabpanel" aria-labelledby="custom-tabs-one-unshift-tab">
                                      <a href="pages/projects/praktikum01/02_fungsi_array/05_fungsi_array_unshift.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/02_fungsi_array/05_fungsi_array_unshift.php" ?>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                03_data_array
                            </h4>
                        </div>
                    </a>
                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-12 col-sm-12">
                              <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                  <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link" id="custom-tabs-one-siswa-tab" data-toggle="pill" href="#custom-tabs-one-siswa" role="tab" aria-controls="custom-tabs-one-siswa" aria-selected="true">Array siswa</a>
                                    </li>
                                  </ul>
                                </div>
                                <div class="card-body">
                                  <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-siswa" role="tabpanel" aria-labelledby="custom-tabs-one-siswa-tab">
                                      <a href="pages/projects/praktikum01/03_data_array/00_data_array_siswa.php" target="_blank">Click Me!</a>
                                      <hr>
                                      <?php include_once "pages/projects/praktikum01/03_data_array/00_data_array_siswa.php" ?>
                                    </div>
                                  </div>
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0-rc
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

  <!-- Foot -->
  <?php
  include "pages/main/foot.php";
  ?>
  <!-- /.foot -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
$(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
</body>
</html>
