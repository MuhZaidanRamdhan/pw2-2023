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
            <form method="POST" action="/reviews/{{ $review->id }}">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Film</label>
                    <div class="col-sm-10">
                    <select id="genre" class="form-select" aria-label="Default select example" name="movie_id">
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $movie->id == $review->movie_id ? 'selected' : '' }}>{{ $movie->judul }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">User </label>
                    <div class="col-sm-10">
                    <input type="text" id="exampleFormControlInput1" class="form-control" name="user" value="{{ $review->user }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Rating </label>
                    <div class="col-sm-10">
                    <input type="text" id="exampleFormControlInput1" class="form-control" name="rating" value="{{ $review->rating }}">
                    </div>
                </div>
                    <div class="mb-3 row">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Review </label>
                        <div class="col-sm-10">
                        <input type="text" id="exampleFormControlInput1" class="form-control" name="review" value="{{ $review->review }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal </label>
                        <div class="col-sm-10">
                        <input type="date" id="tanggal" class="form-control" name="tanggal" value="{{ $review->tanggal }}">
                        </div>
                    </div>
                    <input type="submit" value="Update Movie" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection