@extends('index.layout.main')


@section('container')
<main class="form-signin mt-5">
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
@if(session('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
  <form action="/login" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" class="form-control @error('email') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>

    <small class="d-block mt-2 ">Don't have account? <a href="/register">Register</a></small>
  </form>
</main>
@endsection