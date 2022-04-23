<?php
    include_once "00_header.php";
?>


<script>
    <?php
        $mahasiswa1 = new Mahasiswa("02011", "Faiz Fikri", "TI", "2012", 3.8);
        $mahasiswa2 = new Mahasiswa("02012", "Alissa Khairunnisa", "TI", "2012", 3.9);
        $mahasiswa3 = new Mahasiswa("01011", "Rosalie Naurah", "SI", "2010", 3.46);
        $mahasiswa4 = new Mahasiswa("01012", "Defghi Muhammad", "SI", "2010", 3.2);
        $armaha = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4];
    ?>
</script>


<body class="m-4">
    <h3>Form Input Nilai</h3>
    
    <hr>
    
    <div class="col-md-10">
        <form method="POST" action="02.1_nilai_mahasiswa_data_result.php">
            <div class="form-group row">
                <label for="nim" class="col-3 col-form-label">NIM</label> 
                <div class="col-6">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nim" name="nim" placeholder="Insert your NIM here!" type="text" class="form-control">
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
                <label for="nilai" class="col-3 col-form-label">Nilai</label> 
                <div class="col-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    </div> 
                    <input id="nilai" name="nilai" placeholder="Insert here!" type="number" class="form-control">
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
</body>

<?php
    require_once "00_footer.php";
?>