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

          <div class="col-md-7">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">BMI Form Input</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST">
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

            <!-- Array Data -->
  <div>
    <?php
    $_tanggal = $_POST['tanggal'];
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_jk = $_POST['jk'];
    $_berat = $_POST['berat'];
    $_tinggi = $_POST['tinggi'];
    
    $tinggimeter = $_tinggi / 100;
    $nilai = $_berat / ($tinggimeter * $tinggimeter);

    $_namaone = explode(' ',trim($_nama));

    $arrayPasien = [
      $pasien1 = new BMIPasien("2022-01-10", "P-001", "Ahmad Fauiz", "Laki-laki", 69.8, 169),
      $pasien2 = new BMIPasien("2022-01-10", "P-002", "Rina Nur Mithasari", "Perempuan", 55.3, 165),
      $pasien3 = new BMIPasien("2022-01-11", "P-003", "Lutfi Al-Fikri", "Laki-laki", 45.2, 171),
    ];

    if (isset($_POST['submit'])){
      $pasien4 = new BMIPasien($_tanggal, $_kode, $_nama, $_jk, $_berat, $_tinggi);
      $arrayPasien[] = $pasien4;
    }
    ?>
  </div>
  <!-- /.array -->

          <div class="col-md-5">
            <!-- Form Element sizes -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Calculator Result of <?php echo $_namaone[0] ?></h3>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <input type="text" class="knob" data-max="50"
                  value="<?= number_format($nilai, 1); ?>" 
                  data-skin="tron" data-thickness="0.2" readonly
                  data-angleArc="250" data-angleOffset="-125" data-width="150" data-height="120" data-fgColor="#00c0ef">
                  <div class="knob-label"><?= number_format($nilai, 1); ?> of 50</div>
                </div>

                <div class="text-left mt-5">
                  <div class="row">
                    <?php
                    echo "Berat : $_berat Kg";
                    echo "<br>Tinggi : $_tinggi Cm";
                    echo "<br>Jenis Kelamin : $_jk";
                    ?>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Index Image</h3>
              </div>
              <div class="card-body">
                <?php
                if ($nilai < 18.5) {
                echo '<img class="img-fluid" src="dist/img/male/underweight.png" alt="">';
                } elseif ($nilai >= 18.5 && $nilai < 25) {
                  echo '<img class="img-fluid" src="dist/img/male/normal.png" alt="">';
                } elseif ($nilai >= 25 && $nilai < 30) {
                  echo '<img class="img-fluid" src="dist/img/male/overweight.png" alt="">';
                } elseif ($nilai >= 30) {
                  echo '<img class="img-fluid" src="dist/img/male/obese.png" alt="">';
                }
                ?>
              </div>
              <!-- /.card-body -->
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Calculator Form Result</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Tanggal Periksa</th>
                      <th>Kode Pasien</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Berat</th>
                      <th>Tinggi</th>
                      <th>Nilai</th>
                      <th>Status BMI</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php $nomer = 1;?>
                    <?php foreach ($arrayPasien as $arr):?>
                    <tr>
                      <td><?php echo $nomer++ ?></td>
                      <td><?php echo $arr -> tanggal(); ?></td>
                      <td><?php echo $arr -> kode(); ?></td>
                      <td><?php echo $arr -> nama(); ?></td>
                      <td><?php echo $arr -> jk(); ?></td>
                      <td><?php echo $arr -> berat(); ?></td>
                      <td><?php echo $arr -> tinggi(); ?></td>
                      <td><?php echo $arr -> nilai(); ?></td>
                      <td><?php echo $arr -> status(); ?></td>
                    </tr>
                    <?php endforeach ?>
                </table>
                <div class="test">
                  <?php
                  // if ($arrayPasien -> status() = "Overweight") {
                  //   return '<img class="img-fluid" src="dist/img/male/obese.png" alt="">' ;
                  // }
                  ?>
                </div>
              </div>
              <!-- /.card-body -->
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
