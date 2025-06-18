@extends('master')

@section('title', 'Tiket')
@section('judul', 'Tiket')

@section('content')
<div class="content-wrapper">



  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Tiket</h4>

          <form class="forms-sample" action="{{ route('tiket.store') }}" method="POST">
            @csrf

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
              <input type="number" class="form-control" id="harga" placeholder="Ruangan" name="harga" required>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
