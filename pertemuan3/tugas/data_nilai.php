<?php 
    include_once 'header.php';
?>

<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Fakhirul</td>
              <td>Statistika dan Probabilitas</td>
              <td>89</td>
              <td>95</td>
              <td>80</td>
              <td>87.95</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Muhammad Fadhillah</td>
              <td>Dasar Dasar Pemrograman</td>
              <td>78</td>
              <td>81</td>
              <td>80</td>
              <td>79.75</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>

          <?php
			if(isset($_POST['submit'])) {
                require_once 'libfungsi.php';

                $nama = $_POST['nama_lengkap'];
                $mata_kuliah = $_POST['matkul'];
                $uts = $_POST['UTS'];
                $uas = $_POST['UAS'];
                $praktik =$_POST['Praktikum'];
                $total_nilai = ($uts * 0.30) + ($praktik * 0.35) + ($uas * 0.35);
                $lulus = kelulusan($uts, $uas, $praktik);
                $grade = grade($total_nilai);
                $predikat = predikat($total_nilai);
                

                echo "<tr>";
                echo "<td>3</td>";
                echo "<td>" . $nama . "</td>";
                echo "<td>" . $mata_kuliah . "</td>";
                echo "<td>" . $uts . "</td>";
                echo "<td>" . $uas . "</td>";
                echo "<td>" . $praktik . "</td>";
                echo "<td>" . $total_nilai . "</td>";
                echo "<td>" . $grade . "</td>";
                echo "<td>" . $predikat . "</td>";
                echo "<td>" . $lulus . "</td>";

                echo "</tr>";


            }
                    
                    
                    
                    
                    
                    /**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
          ?>
      </tbody>
  </table>
</div>

<?php
    include_once 'footer.php';
?>