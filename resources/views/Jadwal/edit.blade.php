@extends('master')

@section('title', 'Edit Jadwal')
@section('judul', 'Edit Jadwal')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Jadwal</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="id_film">Film</label>
                    <input type="text" name="id_film" class="form-control" value="{{ $jadwal->id_film }}" required>
                </div>

                <div class="form-group">
                    <label for="ruangan">Ruangan</label>
                    <input type="text" name="ruangan" class="form-control" value="{{ $jadwal->ruangan }}" required>
                </div>
                <div class="form-group">
                    <label for="show_date">Tanggal Tayang</label>
                    <input type="date" name="show_date" class="form-control" value="{{ $jadwal->show_date }}" required>
                </div>
                <div class="form-group">
                    <label for="show_time">Jam Tayang</label>
                    <input type="time" name="show_time" class="form-control" value="{{ $jadwal->show_time }}" required>
                </div>         
                <div class="d-flex justify-content-between">
                    <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
