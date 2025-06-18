@extends('master')

@section('title', 'Edit Film')
@section('judul', 'Edit Film')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Film</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('film.update', $film->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="title" class="form-control" value="{{ $film->title }}" required>
                </div>

                <div class="form-group">
                    <label for="genre">Genre</label>
                    <input type="text" name="genre" class="form-control" value="{{ $film->genre }}" required>
                </div>

                <div class="form-group">
                    <label for="durasi">Durasi</label>
                    <input type="text" name="durasi" class="form-control" value="{{ $film->durasi }}" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('film.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
