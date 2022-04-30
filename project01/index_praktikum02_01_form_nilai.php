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

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Praktikum02</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12" id="accordion">
              <div class="col-md-10">
                <form method="GET" action="#">
                  <div class="form-group row">
                    <label for="nama" class="col-3 col-form-label">Nama Lengkap</label> 
                    <div class="col-6">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                          </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="Insert your name here!" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="matkul" class="col-3 col-form-label">Mata Kuliah</label> 
                    <div class="col-3">
                      <select id="matkul" name="matkul" class="custom-select">
                        <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai_uts" class="col-3 col-form-label">Nilai UTS</label> 
                    <div class="col-2">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-calculator"></i>
                          </div>
                        </div> 
                        <input id="nilai_uts" name="nilai_uts" placeholder="Insert here!" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai_uas" class="col-3 col-form-label">Nilai UAS</label> 
                    <div class="col-2">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-calculator"></i>
                          </div>
                        </div> 
                        <input id="nilai_uas" name="nilai_uas" placeholder="Insert here!" type="text" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nilai_tugas" class="col-3 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-2">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fa fa-calculator"></i>
                          </div>
                        </div> 
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Insert here!" type="text" class="form-control">
                      </div>
                    </div>
                  </div> 
                  <div class="form-group row">
                    <div class="offset-3 col-10">
                      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

              <div>
                <?php
                $proses = $_GET['proses'];
                $nama_siswa = $_GET['nama'];
                $mata_kuliah = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];
                $total = $nilai_uts + $nilai_uas + $nilai_tugas;
                ?>
              </div>

              <div class="card w-50">
                <div class="card-header">
                  <?php
                  echo "<h3>Nama : $nama_siswa</h3>";
                  ?>
                </div>
                          <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Mata Kuliah  :</th>
                        <?php
                        echo "<th>$mata_kuliah</th>"
                        ?>
                        <th style="width: 40px">Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Nilai UTS</td>
                        <td>
                        </td>
                        <td><span class="badge bg-danger">
                          <?php
                          echo $nilai_uts;
                          ?>
                        </span></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Nilai UAS</td>
                        <td>
                        </td>
                        <td><span class="badge bg-warning">
                          <?php
                          echo $nilai_uas;
                          ?>
                        </span></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Nilai Tugas</td>
                        <td>
                        </td>
                        <td><span class="badge bg-primary">
                          <?php
                          echo $nilai_tugas;
                          ?>
                        </span></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Total</td>
                        <td>
                        </td>
                        <td><span class="badge bg-success">
                          <?php
                          echo $total;
                          ?>
                        </span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                          <!-- /.card-body -->
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
