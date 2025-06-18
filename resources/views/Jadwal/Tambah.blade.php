@extends('master')

@section('title', 'Jadwal')
@section('judul', 'Jadwal')

@section('content')
<div class="content-wrapper">

  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Jadwal</h4>

          <form class="forms-sample" action="{{ route('jadwal.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="id_film">Film</label>
              <select name="id_film" id="id_film" class="form-control" required>
                <option value="">Pilih Film</option>
                @foreach ($film as $item)
                  <option value="{{$item -> id}}">{{$item -> title}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="ruangan">Ruangan</label>
              <input type="text" class="form-control" id="ruangan" placeholder="Ruangan" name="ruangan" required>
            </div>
            <div class="form-group">
              <label for="show_date">Tanggal Tanyang</label>
              <input type="date" class="form-control" id="show_date" placeholder="Tanggal Tanyang" name="show_date" required>
            </div>
            <div class="form-group">
              <label for="show_time">Jamn Tanyang</label>
              <input type="time" class="form-control" id="show_time" placeholder="Jamn Tanyang" name="show_time" required>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
