
@extends('index.layout.main')


@section('container')
<main class="form-signin mt-5">
  <form action="/register" method="post">
    @csrf
    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

    <div class="form-floating">
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" value="{{ old('name') }}" autofocus required>
      <label for="name">Name</label>
      @error('name')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" required>
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

    <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>

    <small class="d-block mt-2 ">Have a account? <a href="/login">Login</a></small>
  </form>
</main>
@endsection
