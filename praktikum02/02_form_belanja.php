<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="m-3">
    <h3>Form Belanja</h3>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="02_form_belanja.php">
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
                                <i class="fa fa-bar-chart-o"></i>
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
        </div>
    </div>
</body>
</html>