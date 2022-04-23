<?php
    include_once "00_header.php";
    require_once "02_nilai_mahasiswa_class.php"
?>
<body class="m-4">
    <h3>Form Result Nilai</h3>
    <hr>

    <?php
    $proses = $_POST['proses'];
    $nim = $_POST['nim'];
    $mata_kuliah = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $status = $_POST['status'];


    $no = 1;
    $no ++;
    ?>

    <div class="card w-50">
        <div class="card-header">
        <?php
        echo "<h3>NIM : $nim</h3>";
        ?>
        </div>
        <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Mata Kuliah  :</th>
                <?php
                echo "<th>$mata_kuliah</th>"
                ?>
            </tr>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th style="width: 40px">Nilai</th>
            </tr>
            </thead>
            <tbody>
            <tr detail="Nilai">
                <td>1.</td>
                <td>Nilai</td>
                <td>
                </td>
                <td><span class="badge bg-danger">
                <?php
                echo $nilai;
                ?>
                </span></td>
            </tr>
            <tr detail="status">
                <td>2.</td>
                <td>Status Kelulusan</td>
                <td>
                </td>
                <td><span class="badge bg-secondary">
                <?php
                echo $status;
                ?>
                </span></td>
            </tr>
            <tr detail="grade">
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
            <tr detail="predikat">
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
    </div>

</body>

<?php
    require_once "00_footer.php";
?>