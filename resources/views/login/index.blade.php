@extends('layout.main')
@section('container')
<main class="form-signin w-50 m-auto">
    <form action="/login" method="post">
        @csrf
        @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success')  }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError')  }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="h3 my-5 fw-normal text-center">Please Login</h1>

        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                autofocus required value="{{ old('email') }}">
            <label for=" floatingInput">Email address</label>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            <small class="d-block mt-3 text-center">Not registered? <a href="/register">Register Now!</a></small>
    </form>
</main>
@endsection