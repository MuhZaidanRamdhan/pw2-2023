@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Genres Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Genres</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Genres Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Dekskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama Genre</th>
                    <th>Dekskripsi</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Thriller</td>
                    <td>Cerita seru adalah sebuah genre sastra, film, dan acara televisi yang memiliki banyak subtipe di dalamnya</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Romance</td>
                    <td>kisah cinta yang direkam dalam media visual untuk disiarkan di bioskop dan televisi yang berfokus pada gairah,<br> emosi, dan keterlibatan kasih sayang dari karakter utama dan perjalanan yang benar-benar kuat,<br> cinta sejati dan murni mereka yang akan membawa mereka melalui kencan, pacaran atau pernikahan</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Drama</td>
                    <td>genre karya sastra yang menggambarkan kehidupan manusia dengan gerak. Drama menggambarkan realita kehidupan,<br> watak, serta tingkah laku manusia melalui peran dan dialog yang dipentaskan.Kisah dan cerita dalam drama memuat konflik <br> dan emosi yang secara khusus ditujukan untuk pementasan teater.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Action</td>
                    <td>genre utama dalam film yang satu atau beberapa tokohnya terlibat dalam tantangan yang memerlukan <br> kekuatan fisik ataupun kemampuan khusus.</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sci-Fi</td>
                    <td>suatu bentuk fiksi spekulatif yang terutama membahas tentang pengaruh sains dan teknologi yang <br> diimajinasikan terhadap masyarakat dan para individual</td>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection