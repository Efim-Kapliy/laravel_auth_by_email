@extends('layouts.main')

@section('title', 'Login form')

@section('content')
  <h1>Forgot password</h1>
  <p>Enter your email address to receive a link to reset your password.</p>

  <form action="{{ route('password.email') }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
        placeholder="Email..." value="{{ old('email') }}">
      @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
  </form>
@endsection
