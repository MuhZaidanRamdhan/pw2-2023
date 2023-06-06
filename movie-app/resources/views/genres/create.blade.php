@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Genres Data</h1>
    <div class="mb-4">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Genres</li>
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
            Genres Data
        </div>
        <div class="card-body">
            <form method="POST" action="/genres">
                @csrf
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">nama </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="nama">
                    </div>
                  </div>
                <div class="mb-3 row">
                    <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Deskripsi </label>
                    <div class="col-sm-10">
                      <input type="text" id="exampleFormControlInput1" class="form-control" name="deskripsi">
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
@endsection