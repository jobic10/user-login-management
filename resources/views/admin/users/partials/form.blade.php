@csrf
<div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" value="{{ old('name') }}@isset($user) {{ $user->name }} @endisset" required name="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name">
    @error('name')
        <span class="invalid-feedback" role='alert'>{{ $message }}</span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email"  value="{{ old('email') }}@isset($user) {{ $user->email }} @endisset"  required name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email">
    @error('email')
        <span class="invalid-feedback" role='alert'>{{ $message }}</span>
    @enderror
  </div>
  @isset($create)
  <div class="mb-3">
      <label for="password" class="form-label">Password</label>
    <input type="password" name="password" required class="form-control @error('password') is-invalid @enderror" id="password">
    @error('password')
        <span class="invalid-feedback" role='alert'>{{ $message }}</span>
        @enderror
    </div>
    @endisset
    <div class="mb-3">
      @foreach ($roles as $role)
      <input type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->name }}" class="form-check-input" @isset($user) @if(in_array($role->id, $user->roles->pluck('id')->toArray())) checked @endif @endisset>
      <label for="{{ $role->name }}" class="form-check-label">{{ $role->name }}</label>
      @endforeach
</div>


<button type="submit" class="btn btn-primary">Register</button>
