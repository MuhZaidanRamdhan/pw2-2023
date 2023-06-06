@extends('layouts.main')

@section('content')
<h1 class="mt-4">Reviews Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Reviews</li>
    </ol>
    <a href="/reviews/create">
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
        Reviews Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>User</th>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($reviews as $review)
                <tr>    
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $review->movie->judul }}</td>
                    <td>{{ $review->user }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->review }}</td>
                    <td>{{ $review->tanggal }}</td>
                    <td>
                        <form action="/reviews/{{$review->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="" class="btn btn-sm btn-warning"> Edit</a>
                            <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
