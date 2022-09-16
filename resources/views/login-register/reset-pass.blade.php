@extends('index.layout.main')
@section('container')
<main class="form-signin mt-5">
      <form action="{{ route('password.update') }}" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1>

        <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $request->email ?? old('email') }}" >
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        

        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" autofocus>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-floating">
          <input type="password" class="form-control" name="password_confirmation" id="password-confirm" required>
          <label for="password-confirm">Password Confirmation</label>
        </div>
    
        <button class="w-100 mt-4 btn btn-lg btn-dark" type="submit">Change password</button>

      </form>
    </main>
@endsection