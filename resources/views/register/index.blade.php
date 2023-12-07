@extends('layout.main')
@section('container')
<main class="form-registration w-50 m-auto">
    <h1 class="h3 my-5 fw-normal text-center">Registration Form</h1>
    <form action="/register" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name"
                value="{{ old('name') }}">
            <label for="floatingInput">Nama</label>
            @error('name')
            <div class="invalid-feedback">
                {{ $message  }} </div>
            @enderror
        </div>
        <div class=" form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                name="email" required>
            <label for="floatingInput">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <small class="d-block mt-3 text-center">Already registered? <a href="/login">Login Now!</a></small>
    </form>
</main>
@endsection