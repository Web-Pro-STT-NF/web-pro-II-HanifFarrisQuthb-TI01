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
            <h1>BMI Calculator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BMI Calculator</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">BMI Form Input</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form >
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal">Tanggal Pendaftaran</label>
                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                  </div>

                  <label for="email">Email</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>

                  <label for="kode">Kode Pasien</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    </div>
                    <input id="kode" name="kode" type="text" class="form-control" placeholder="Kode">
                  </div>

                  <label for="nama">Nama Lengkap</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  
                  <label for="berat">Berat Badan</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                    </div>
                    <input id="berat" name="berat" type="text" class="form-control" placeholder="Berat Badan">
                  </div>

                  <label for="tinggi">Tinggi Badan</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                    </div>
                    <input id="tinggi" name="tinggi" type="text" class="form-control" placeholder="Tinggi Badan">
                  </div>

                  <div class="form-group">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>

          <div class="col-md-4">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <input type="text" class="knob" data-max="<?= ($nilai_bmi > 50) ? $nilai_bmi : 50; ?>"
                  value="<?= number_format((float)$nilai_bmi, 1, '.', ''); ?>" 
                  data-skin="tron" data-thickness="0.2"
                  data-angleArc="250" data-angleOffset="-125" data-width="150" data-height="120" data-fgColor="#00c0ef">
                  <div class="knob-label"><?= isset($status_bmi) ? $status_bmi : "" ?></div>
                </div>
                <div class="text-left mt-5">
                  <div class="row">
                    <?= isset($berat) ? "<div class='col-4'>Berat </div> <div class='col-8'> : " . $berat . " kg</div>" : "" ?>
                  </div>
                  <div class="row">
                    <?= isset($tinggi) ? "<div class='col-4'>Tinggi </div> <div class='col-8'> : " . $tinggi . " cm </div>" : "" ?>
                  </div>
                  <div class="row">
                    <?= isset($nilai_bmi) ? "<div class='col-4'>Nilai BMI</div> <div class='col-8'> : " . $nilai_bmi . " </div>" : "" ?>
                  </div>
                  <div class="row">
                    <?= isset($status_bmi) ? "<div class='col-4'>Status BMI</div> <div class='col-8'> : " . $status_bmi . " </div>" : "" ?>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Different Height</h3>
              </div>
              <div class="card-body">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
                <br>
                <input class="form-control" type="text" placeholder="Default input">
                <br>
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
              <!-- /.card-body -->
            </div>
          </div>

        </div>
        <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">BMI Form Input</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal">Tanggal Pendaftaran</label>
                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                  </div>

                  <label for="email">Email</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email">
                  </div>

                  <label for="kode">Kode Pasien</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                    </div>
                    <input id="kode" name="kode" type="text" class="form-control" placeholder="Kode">
                  </div>

                  <label for="nama">Nama Lengkap</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Lengkap">
                  </div>
                  
                  <label for="berat">Berat Badan</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                    </div>
                    <input id="berat" name="berat" type="text" class="form-control" placeholder="Berat Badan">
                  </div>

                  <label for="tinggi">Tinggi Badan</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-calculator"></i></span>
                    </div>
                    <input id="tinggi" name="tinggi" type="text" class="form-control" placeholder="Tinggi Badan">
                  </div>

                  <div class="form-group">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                        <label for="jk_0" class="custom-control-label">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                      </div>
                    </div>
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
</script>
</body>
</html>
