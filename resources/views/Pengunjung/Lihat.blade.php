@extends('master')

@section('title', 'Pengunjung')
@section('judul', 'Pengunjung')

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
                            <th>Nama</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengunjung as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->nama}}</td>
                            <td>{{ $item->email}}</td>
                            @if (Auth::user()->role === 'admin')
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    @include('components.crudbutton',
                                    ['edit'=>route('pengunjung.edit',$item ->id),
                                    'delete'=>route('pengunjung.destroy',$item->id)]
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
                <a href="{{route('pengunjung.create')}}">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </a>
            @endif
        </div>
    </div>

</div>
@endsection
