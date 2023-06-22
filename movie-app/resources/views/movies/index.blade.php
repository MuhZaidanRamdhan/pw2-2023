@extends('layouts.main')

@section('content')
<h1 class="mt-4">Movies Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Movies</li>
    </ol>
    <a href="/movies/create">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success')}}
    </div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Movies Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Poster</th>
                    <th>Genre</th>
                    <th>Negara</th>
                    <th>Tahun</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Poster</th>
                    <th>Genre</th>
                    <th>Negara</th>
                    <th>Tahun</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($movies as $movie)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $movie->judul }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="/assets/img/{{ $movie->poster }}" alt="" style="width: 50px; heighpt:50px;">
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $movie->genre->nama }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $movie->negara }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $movie->tahun }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            {{ $movie->rating }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center">
                            <a href="/movies/{{ $movie->id }}/edit" class="btn btn-sm btn-warning" style="margin-right:3px;">Edit</a>
                            <form action="/movies/{{$movie->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                            </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection