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
                            <th>Film</th>
                            <th>Harga</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tiket as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>
                                @if ($item->jadwals && $item->jadwals->films)
                                    {{$item->jadwals->films->title}}
                                @endif
                                
                            </td>
                            <td>Rp {{ $item->harga}}</td>
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    <form action="{{ route('tambahtiket', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                    </form>
                                    <form action="{{ route('hapustiket', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>    
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{route('tambahtiket')}}">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </a>
        </div>
    </div>

</div>
@endsection
