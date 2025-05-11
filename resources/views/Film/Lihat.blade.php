@extends('master')

@section('title', 'Film')
@section('judul', 'Film')

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
                            <th>Judul Film</th>
                            <th>Genre</th>
                            <th>Durasi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($film as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->genre}}</td>
                            <td>{{ $item->durasi }}</td>
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    <form action="{{ route('tambahfilm', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm mr-2">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                    </form>
                                    <form action="{{ route('hapusfilm', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
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
            <a href="{{route('tambahfilm')}}">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </a>
        </div>
    </div>

</div>
@endsection
