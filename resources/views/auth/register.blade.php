@extends('templates.main')

@section('content')
<form method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="name">
        @error('name')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="email">
        @error('email')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        @error('password')
            <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password2" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password2">
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
