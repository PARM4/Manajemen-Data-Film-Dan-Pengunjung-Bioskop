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
                            @if (Auth::user()->role === 'admin')
                                <th></th>   
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($film as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->genre}}</td>
                            <td>{{ $item->durasi }}</td>
                            @if (Auth::user()->role === 'admin')
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    @include('components.crudbutton',
                                    ['edit'=>route('film.edit',$item ->id),
                                    'delete'=>route('film.destroy',$item->id)]
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
                <a href="{{route('film.create')}}">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </a>
            @endif
        </div>
    </div>

</div>
@endsection
