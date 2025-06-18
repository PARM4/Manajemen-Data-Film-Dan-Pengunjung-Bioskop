@extends('master')

@section('title', 'Tiket')
@section('judul', 'Tiket')

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
                            <th>Nama Pengunjung</th>
                            <th>Jadwal</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            {{-- <td>{{ $item->id_pengunjung}}</td>
                            <td>{{ $item->id_jadwal}}</td> --}}
                            <td>{{ $item->pengunjung->nama ?? 'Tidak ditemukan' }}</td>
                            <td>{{ $item->jadwal->show_date ?? 'Tidak ditemukan' }}</td>
                            <td>{{ $item->harga}}</td>
                            @if (Auth::user()->role === 'admin')
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    @include('components.crudbutton',
                                    ['edit'=>route('tiket.edit',$item ->id),
                                    'delete'=>route('tiket.destroy',$item->id)]
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
                <a href="{{route('tiket.create')}}">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </a>
            @endif
        </div>
    </div>

</div>
@endsection
