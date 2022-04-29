<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Siswa</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="m-4">
  <h3>Form Nilai</h3>
  <hr>
  <div class="col-md-10">
    <form method="POST" action="03_nilai_siswa.php">
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
                <i class="fa fa-bar-chart-o"></i>
              </div>
            </div> 
            <input id="nilai_uts" name="nilai_uts" placeholder="Insert here!" type="number" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_uas" class="col-3 col-form-label">Nilai UAS</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-bar-chart-o"></i>
              </div>
            </div> 
            <input id="nilai_uas" name="nilai_uas" placeholder="Insert here!" type="number" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nilai_tugas" class="col-3 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-bar-chart-o"></i>
              </div>
            </div> 
            <input id="nilai_tugas" name="nilai_tugas" placeholder="Insert here!" type="number" class="form-control">
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
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    $uts = $nilai_uts * 30 / 100;
    $uas = $nilai_uas * 35 / 100;
    $tugas = $nilai_tugas * 35 / 100;
    $total = $uts + $uas + $tugas;


    // Logic
    if($total > 55){
      $status = "Lulus";
    } else{
      $status = "Tidak Lulus";
    }

    if($total > 100){
      $grade = "I";
    } elseif ($total > 84) {
      $grade = "A";
    } elseif ($total > 69) {
      $grade = "B";
    } elseif ($total > 55) {
      $grade = "C";
    } elseif ($total > 35) {
      $grade = "D";
    } elseif ($total > 0) {
      $grade = "E";
    } else{
      $grade = "I";
    }

    switch ($grade) {
      case "E":
        $predikat = "Sangat Kurang";
        break;

      case 'D':
        $predikat = "Kurang";
        break;
      
      case 'C':
        $predikat = "Cukup";
        break;

      case 'B':
        $predikat = "Memuaskan";
        break;

      case 'A':
        $predikat = "Sangat Memuaskan";
        break;

      default:
        $predikat = "Error with your Inputs";
        break;
    }

    // Logic End
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
            <td>Total Nilai</td>
            <td>
            </td>
            <td><span class="badge bg-danger">
              <?php
              echo $total;
              ?>
            </span></td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Status Kelulusan</td>
            <td>
            </td>
            <td><span class="badge bg-secondary">
              <?php
              echo $status;
              ?>
            </span></td>
          </tr>
          <tr>
            <td>6.</td>
            <td>Grade</td>
            <td>
            </td>
            <td><span class="badge bg-success">
              <?php
              echo $grade;
              ?>
            </span></td>
          </tr>
          <tr>
            <td>7.</td>
            <td>Predikat</td>
            <td>
            </td>
            <td><span class="badge bg-info">
              <?php
              echo $predikat;
              ?>
            </span></td>
          </tr>
        </tbody>
      </table>
    </div>
              <!-- /.card-body -->
  </div>

  <!-- <div>
    <?php
    if(!empty($proses)) {
    echo 'Proses : '.$proses;
    echo '<br/>Nama : '.$nama_siswa;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    }
    ?>
  </div> -->

</body>
</html>

