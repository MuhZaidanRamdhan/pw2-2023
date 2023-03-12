<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            margin:40px;
            background-color:#222;
        }
        h2 {
            text-align:center;
            color:white;
            margin-bottom: 20px;
        }
        table {
            border:none;
            border-radius:2%;
            background-color:#F24A72;
            outline:none;
        }

        tr {
            color:white;
        }
    </style>
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Fakhirul Akmal</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+6287855516975</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+6285655563569</td>
				</tr>

				<?php

                if(isset($_POST['submit'])) {

				  $name = $_POST['nama_lengkap'];
				  $email = $_POST['email'];
				  $alamat = $_POST['alamat'];
				  $telp = $_POST['telp'];

                  echo "<tr>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . $name . "</td>";
                  echo "<td>" . $email . "</td>";
                  echo "<td>" . $alamat . "</td>";
                  echo "<td>" . $telp . "</td>";
                  echo "</tr>";
                
                }

				?>

			</tbody>
		</table>
	</div>
</body>
</html>