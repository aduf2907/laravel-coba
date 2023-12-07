@extends('layout.main')

@section('container')

<h1>Buat Postingan Baru</h1>
<form action="/posts/store" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-1">
                    <label for="exampleFormControlInput1" class="form-label">Author</label>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="author" required>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-1">
                    <label for="exampleFormControlInput1" class="form-label">Judul</label>
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="judul" required>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="row mb-3">
                <div class="col-1">
                    <label for="exampleFormControlInput1" class="form-label">Konten</label>
                </div>
                <div class="col-4">
                    <textarea class="form-control" name="konten" cols="30" rows="10" maxlength="255"
                        required></textarea>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


{{-- <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Author</label>
    <input class="form-control" type="text">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Judul</label>
    <input class="form-control" type="text">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Konten</label>
    <input class="form-control" type="text">
</div> --}}

@endsection