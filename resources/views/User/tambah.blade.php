@extends('master')

@section('title', 'User')
@section('judul', 'User')

@section('content')
<div class="content-wrapper">



  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Form User</h4>

          <form class="forms-sample" action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Nama" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control" id="role" name="role" required>
                <option value="" disabled selected>-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="staf">Staf</option>
              </select>
            </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
