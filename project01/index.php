<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php require_once "class_bmipasien.php" ?>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2>Body Mass Index Calculator</h2>
                <form>
                    <div class="form-group row">    
                        <label for="tanggal" class="col-4 col-form-label">Tanggal Pendaftaran</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                            </div>
                            </div> 
                            <input id="tanggal" name="tanggal" type="date" placeholder="yyyy-mm-dd" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-id-card-o"></i>
                            </div>
                            </div> 
                            <input id="kode" name="kode" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                            </div> 
                            <input id="nama" name="nama" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calculator"></i>
                            </div>
                            </div> 
                            <input id="berat" name="berat" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tinggi" class="col-4 col-form-label">Tinggi Badan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-calculator"></i>
                            </div>
                            </div> 
                            <input id="tinggi" name="tinggi" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
                            <label for="jk_0" class="custom-control-label">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan"> 
                            <label for="jk_1" class="custom-control-label">P</label>
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div>
            <?php
            $arrayPasien = [
                $pasien1 = new BMIPasien("2022-01-10", "P-001", "Ahmad", "L", 69.8, 169),
                $pasien2 = new BMIPasien("2022-01-10", "P-002", "Rina", "P", 55.3, 165),
                $pasien3 = new BMIPasien("2022-01-11", "P-003", "Lutfi", "L", 45.2, 171),
            ];

            if (isset($_GET['submit'])){
                $pasien4 = new BMIPasien($_GET['tanggal'], $_GET['kode'], $_GET['nama'], $_GET['jk'], $_GET['berat'], $_GET['tinggi']);
                $arrayPasien[] = $pasien4;
            }
            ?>
        </div>

        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-danger border-dark">
                    <thead>
                        <tr>
                            <th scope="col">N0.</th>
                            <th scope="col">Tanggal Periksa</th>
                            <th scope="col">Kode Pasien</th>
                            <th scope="col">Nama Pasien</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Berat</th>
                            <th scope="col">Tinggi</th>
                            <th scope="col">Nilai</th>
                            <th scope="col">Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomer = 1; ?>
                        <?php foreach ($arrayPasien as $arr) : ?>
                        <tr>
                            <th scope="row"><?= $nomer++ ?></th>
                            <td><?= $arr->GetKode() ?></td>
                            <td><?= $arr->GetNama(); ?></td>
                            <td><?= $arr->GetJK(); ?></td>
                            <td><?= $arr->GetTanggal(); ?></td>
                            <td><?= $arr->GetBerat() ?></td>
                            <td><?= $arr->GetTinggi() ?></td>
                            <td><?= $arr->nilai(); ?></td>
                            <td><?= $arr->status(); ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                    <caption>
                    Captions of the table
                    </caption>
                </table>
    </div>
    </div>
</body>
</html>