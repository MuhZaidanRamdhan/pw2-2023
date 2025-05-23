@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Movies</li>
        </ol>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Movies Data
        </div>
        <div class="card-body">
            <form enctype="multipart/form-data" method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Title </label>
                    <div class="col-sm-10">
                    <input type="text" id="exampleFormControlInput1" class="form-control" name="judul" value="{{ $movie->judul }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Poster </label>
                    <div class="col-sm-10">
                        <img src="/assets/img/{{ $movie->poster }}" alt="" style="width: 200px; margin-bottom:20px;">
                    <input type="file" id="exampleFormControlInput1" class="form-control" name="poster" value="/assets/img/{{ $movie->poster }}">
                    </div>
                </div>
                    <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                    <select id="genre" class="form-select" aria-label="Default select example" name="genre_id">
                        @foreach ($genres as $genre)
                        <option value="{{ $genre->id }}" {{ $genre->id == $movie->genre_id ? 'selected' : '' }}>{{ $genre->nama }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Country</label>
                        <div class="col-sm-10">
                        <input type="text" id="exampleFormControlInput1" class="form-control" name="negara" value="{{ $movie->negara }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Year</label>
                        <div class="col-sm-10">
                        <input type="text" id="exampleFormControlInput1" class="form-control" name="tahun" value="{{ $movie->tahun }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Rating</label>
                        <div class="col-sm-10">
                        <input type="text" id="exampleFormControlInput1" class="form-control" name="rating" value="{{ $movie->rating }}">
                        </div>
                    </div>
                    <input type="submit" value="Update Movie" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection