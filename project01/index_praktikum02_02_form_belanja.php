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
            <div class="col-md-8">
                <form method="POST" action="#">
                    <div class="form-group row">
                        <label for="customer" class="col-2 col-form-label">Customer</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                            </div> 
                            <input id="customer" name="customer" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-2">Pilih Produk</label> 
                        <div class="col-6">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
                        <div class="col-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            </div> 
                            <input id="jumlah" name="jumlah" type="number" class="form-control">
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-2 col-10">
                        <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

                <div>
                    <?php
                    $proses = $_POST['proses'];
                    $customer = $_POST['customer'];
                    $produk = $_POST['produk'];
                    $jumlah = $_POST['jumlah'];
                    ?>
                </div>

                <div class="card w-75">
                    <div class="card-header">
                        <h3>Form Belanja Pelanggan</h3>
                    </div>
                    <!-- /.card-head -->

                    <div class="card-body p-0">
                        <table class="table table-striped">

                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Nama Customer</td>
                                    <td>:</td>
                                    <td><span>
                                    <?php
                                    echo $customer;
                                    ?>
                                    </span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Produk</td>
                                    <td>:</td>
                                    <td><span>
                                    <?php
                                    echo $produk;
                                    ?>
                                    </span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Jumlah</td>
                                    <td>:</td>
                                    <td><span>
                                    <?php
                                    echo $jumlah;
                                    ?>
                                    </span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>      
            </div>

            <div class="col-md-4">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    <li class="list-group-item">TV : 4.200.000</li>
                    <li class="list-group-item">Kulkas : 3.100.000</li>
                    <li class="list-group-item">Mesin Cuci : 3.800.000</li>
                    <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
                </ul>
                <!-- <div class="list-group">
                    <p class="list-group-item list-group-item-action active mb-0">Daftar Harga</p>
                    <div class="list-group-item">
                        TV : Rp. 4.200.000,-
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp. 3.100.000,-
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp. 3.800.000,-
                    </div>
                    <p class="list-group-item list-group-item-action active">Harga Dapat Berubah Setiap Saat</p>
                </div> -->
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
