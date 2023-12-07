@extends('layout.main')
@section('container')
<main class="form-registration w-100 m-auto">
    <form>
        <h1 class="h3 my-5 fw-normal text-center">Registration Form</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Almira" name="name">
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="almira" name="username">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <small class="d-block mt-3 text-center">Already registered? <a href="/login">Register Now!</a></small>
    </form>
</main>
@endsection