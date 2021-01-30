@extends('templates.main')

@section('content')
<h1>Register</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" value="{{ old('name') }}" required name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name">
        @error('name')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email"  value="{{ old('email') }}"  required name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email">
        @error('email')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" id="password">
        @error('password')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label">Confirm Password</label>
        <input type="password" required name="password_confirmation" class="form-control" id="password2">
      </div>


    <button type="submit" class="btn btn-primary">Register</button>
  </form>
@endsection
