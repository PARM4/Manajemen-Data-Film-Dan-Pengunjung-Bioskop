@extends('master')

@section('title', 'Edit Tiket')
@section('judul', 'Edit Tiket')

@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Tiket</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('tiket.update', $tiket->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="id_pengunjung">Nama Pengunjung</label>
                    <select name="id_pengunjung" id="id_pengunjung" class="form-control" required>
                      <option value="">Pengunjung</option>
                      @foreach ($pengunjung as $item)
                        <option value="{{$item -> id}}">{{$item ->nama}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_jadwal">Jadwal</label>
                    <select name="id_jadwal" id="id_jadwal" class="form-control" required>
                        <option value="">Jadwal</option>
                        @foreach ($jadwal as $item)
                            <option value="{{$item -> id}}">{{$item -> show_date}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="decimal" name="harga" class="form-control" value="{{ $tiket->harga }}" required>
                </div>
                
                <div class="d-flex justify-content-between">
                    <a href="{{ route('tiket.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
