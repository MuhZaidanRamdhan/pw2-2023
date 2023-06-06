@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Reviews Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Reviews</li>
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
            Reviews Data
        </div>
        <div class="card-body">
            <form method="POST" action="/reviews">
                @csrf
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Movie</label>
                    <div class="col-sm-10">
                    <select id="genre" class="form-select" aria-label="Default select example" name="movie_id">
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->judul }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">User </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="user">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Rating </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="rating">
                    </div>
                  </div>
                    
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Review</label>
                        <div class="col-sm-10">
                          <input type="text" id="exampleFormControlInput1" class="form-control" name="review">
                        </div>
                      </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">tanggal</label>
                        <div class="col-sm-10">
                          <input type="date" id="exampleFormControlInput1" class="form-control" name="tanggal">
                        </div>
                      </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection