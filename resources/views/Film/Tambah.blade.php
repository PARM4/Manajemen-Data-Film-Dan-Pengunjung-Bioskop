@extends('master')

@section('title', 'Film')
@section('judul', 'Film')

@section('content')
<div class="content-wrapper">



  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form Film</h4>

          <form class="forms-sample" action="{{ route('film.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="title">Judul Film</label>
              <input type="text" class="form-control" id="title" placeholder="Judul" name="title" required>
            </div>
            <div class="form-group">
              <label for="genre">Genre</label>
              <input type="text" class="form-control" id="genre" placeholder="Genre" name="genre" required>
            </div>
            <div class="form-group">
              <label for="durasi">Durasi</label>
              <input type="time" class="form-control" id="durasi" placeholder="Durasi" name="durasi" required>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
