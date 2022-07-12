@extends('layouts.main')

@section('content')
<div class="row justify-content-center  align-items-center h-100">
    <div class="col-md-5">

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
            <form action="/signin" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email"
                        class="form-control rounded-top @error('email') is-invalid rounded @enderror"
                        placeholder="Email" required autofocus value="{{old('email')}}">
                    <label for="email">E-mail</label>
                    @error('email')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password') is-invalid rounded @enderror"
                        placeholder="Password" required value="{{old('email')}}">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
            </form>
            <small class="text-center d-block mt-3">Didn't have an account? <a href="/signup"
                    class="text-decoration-none">Sign Up!</a></small>
        </main>
    </div>
</div>
@endsection
