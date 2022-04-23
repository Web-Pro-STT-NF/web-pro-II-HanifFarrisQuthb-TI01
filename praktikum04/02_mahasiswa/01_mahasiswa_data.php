<?php 
    include_once "00_header.php";
    require_once "01_mahasiswa_class.php";

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


    <section>
        <div class="row pt-2 px-3">
            <div class="col-9">
                <span><b>Show</b></span>
                <div class="btn-group">
                    <button class="btn btn-none dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        10
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">1</a></li>
                        <li><a class="dropdown-item" href="#">2</a></li>
                        <li><a class="dropdown-item" href="#">3</a></li>
                        <li><a class="dropdown-item" href="#">10</a></li>
                    </ul>
                </div>
                <span><b>Entries</b></span>
            </div>
            <div class="col-3">
                <div class="float-end input-group">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Search : </label>
                    <div class="col-sm-9">
                        <input type="search" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-2 px-4">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">NIM</th>
                        <th class="p-2">Nama</th>
                        <th class="p-2">Prodi</th>
                        <th class="p-2">Alumni Tahun</th>
                        <th class="p-2">IPK</th>
                        <th class="p-2">Predikat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomer = 1;
                    foreach ($armaha as $mhs) {

                        echo
                        '<tr>
                            <td class="p-2">' . $nomer . '</td>
                            <td class="p-2">' . $mhs->nim . '</td>
                            <td class="p-2">' . $mhs->nama . '</td>
                            <td class="p-2">' . $mhs->prodi . '</td>
                            <td class="p-2">' . $mhs->thn_angkatan . '</td>
                            <td class="p-2">' . $mhs->ipk . '</td>
                            <td class="p-2">' . $mhs->predikat_ipk() . '</td>
                        </tr>';
                        $nomer++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row px-3">
            <div class="col-6">
                <p>Showing 1 to 4 for 4 entries</p>
            </div>
            <div class="col-6">
                <nav aria-label="Page navigation example">
                    <ul class="pagination float-end">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    <hr>

<?php
    require_once "00_footer.php";
?>