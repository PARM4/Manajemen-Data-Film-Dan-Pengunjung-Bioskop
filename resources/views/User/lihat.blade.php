@extends('master')

@section('titName')
@section('judName')

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
                            <th>Password</th>
                            <th>Role</th>
                            @if (Auth::user()->role === 'admin')
                                <th></th>   
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email}}</td>
                            <td>{{ $item->password}}</td>
                            <td>{{ $item->role}}</td>
                            @if (Auth::user()->role === 'admin')
                            <td class="text-end">
                                <div class="d-inline-flex gap-2">
                                    @include('components.crudbutton',
                                    ['edit'=>route('user.edit',$item ->id),
                                    'delete'=>route('user.destroy',$item->id)]
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
                <a href="{{route('user.create')}}">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
