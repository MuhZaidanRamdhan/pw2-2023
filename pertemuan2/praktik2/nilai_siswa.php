<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    <?php


        $name = $_POST['nama_lengkap'];
        $matkul = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        
        $rata_nilai = ($nilai_uas * 0.3) + ($nilai_uts * 0.35) + ($nilai_tugas * 0.35);

        echo "<br>Nama saya : " . $name;
        echo "<br>Matkul yang dipilih : " . $matkul;
        echo "<br>Nilai UTS : " . $nilai_uas;
        echo "<br>Nilai UAS : " . $nilai_uts;
        echo "<br>Nilai Tugas : " . $nilai_tugas;
        echo "<hr>";
        echo "Nilai Rata-rata : " . $rata_nilai;
        echo "<hr>";


    ?>
</body>
</html>