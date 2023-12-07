@extends('layout.main')

@section('container')
@if (session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
</div>
@endif
@if (session('danger'))
<div class="alert alert-danger" role="alert">
    {{ session('danger') }}
</div>
@endif

<h1>Halaman Post</h1>
<p>ini halaman post punya {{ $name }}</p>

<a href="/posts/create" class="btn btn-primary my-3">Tambah Post</a>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Author</th>
            <th scope="col">Judul</th>
            <th scope="col">Konten</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $isi)
        <tr>
            <td>{{ $isi->id }}</td>
            <td>{{ $isi->author }}</td>
            <td>{{ $isi->judul }}</td>
            <td width="30%">{{ $isi->konten }}</td>
            <td>
                <a type="button" href="/posts/edit/{{ $isi->id }}" class="btn btn-warning">Edit</a>
                <a type="button" href="/posts/delete/{{ $isi->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection