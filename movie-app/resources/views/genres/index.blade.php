@extends('layouts.main')

@section('content')
    
<h1 class="mt-4">Genres Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Genres</li>
    </ol>
    <a href="/genres/create">
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
                @foreach ($genres as $genre)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $genre->nama }}</td>
                    <td>{{ $genre->deskripsi }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <a href="/genres/{{ $genre->id }}/edit" class="btn btn-sm btn-warning" style="margin-right:3px;"> Edit</a>
                        <form action="/genres/{{$genre->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection