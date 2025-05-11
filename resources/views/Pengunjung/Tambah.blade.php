@extends('master')

@section('title', 'Pengunjung')
@section('judul', 'Form Pengunjung')

@section('content')
<div class="content-wrapper">



  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <form class="forms-sample" action="{{ route('simpanpengunjung') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="nama">Nama Pengunjung</label>
              <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" required>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
