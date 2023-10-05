@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class=""></div>

    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal">Registrasi Disini BOSS</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
            <label for="name">Nama Kau</label>

            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror

          </div>
          <div class="form-floating">
            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
            <label for="username">Username</label>

            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror

          </div>
          <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
            <label for="email">Email address</label>

            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror

          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
            <label for="password">Password</label>

            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror

          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Akun Baru</button>
          <small class="d-block mt-2">Ternayata Anda Sudah Punya Akun!! <a href="/login">Kembali Ke Login LAHH</a></small>
          <p class="pt-3 mb-3 text-muted text-center">&copy; MAS | BLOG</p>
        </form>
      </main>
</div>


@endsection