@extends('master')

@section('title', 'Jadwal')
@section('judul', 'Jadwal')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Film</th>
                            <th>Ruangan</th>
                            <th>Tanggal Tayang</th>
                            <th>Waktu Tayang</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                        <tr>
                            <td>{{  $loop->iteration}}</td>
                            <td>{{ $item->film->title }}</td>
                            <td>{{ $item->ruangan}}</td>
                            <td>{{ $item->show_date}}</td>
                            <td>{{ $item->show_time}}</td>
                            @if (Auth::user()->role === 'admin')
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    @include('components.crudbutton',
                                    ['edit'=>route('jadwal.edit',$item ->id),
                                    'delete'=>route('jadwal.destroy',$item->id)]
                                    )
                                </div>
                            </td>   
                            
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if (Auth::user()->role === 'admin')
                <a href="{{route('jadwal.create')}}">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </a>
            @endif
        </div>
    </div>

</div>
@endsection
