@extends('layouts.main')

@section('content')
<div class="row justify-content-center  align-items-center h-100">
    <div class="col-md-5">
        <main class="form-signup w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Sign Up</h1>
            <form action="/signup" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nama"
                        class="form-control rounded-top @error('nama') is-invalid rounded @enderror" id="nama"
                        placeholder="Nama" required value="{{old('nama')}}">
                    <label for="nama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid rounded @enderror" name="email"
                        id="email" placeholder="E-mail" required value="{{old('email')}}">
                    <label for="email">E-mail</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                    <input type="password"
                        class="form-control rounded-bottom @error('password') is-invalid rounded @enderror"
                        name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign In</button>
            </form>
            <small class="text-center d-block mt-3">Already have an account? <a href="/signin"
                    class="text-decoration-none">Sign In!</a></small>
        </main>
    </div>
</div>
@endsection
