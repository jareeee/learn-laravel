@extends('index.layout.main')
@section('container')
<main class="form-signin mt-5">
      <form action="{{ route('password.email') }}" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Email Validation</h1>
       
        @if(session('status'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif(session('error-status'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error-status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container w-100 mt-4 btn-lg btn-dark">
          <p class="text-center">This email validation will send you a link for resetting your password</p>
        </div>

        
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
    
        <button class="w-100 mt-4 btn btn-lg btn-dark" type="submit">Send link reset</button>

      </form>
    </main>
@endsection