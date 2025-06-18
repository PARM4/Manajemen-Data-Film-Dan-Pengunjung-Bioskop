@extends('master')

@section('title', 'Edit Pengunjung')
@section('judul', 'Edit Pengunjung')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Pengunjung</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengunjung.update', $pengunjung->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ $pengunjung->nama }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $pengunjung->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" value="{{ $pengunjung->password }}" required>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('pengunjung.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
