@extends('layout.auth')
@section('page_title', 'Login')

@section('page_content')
<div class="card card-primary">
  <div class="card-header d-flex justify-content-center">
    <h4>{{ env('APP_NAME', 'Laravel') }} - @yield('page_title')</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" autofocus>
        @error('email')<small class="form-text text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password">
        @error('password')<small class="form-text text-danger">{{ $message }}</small>@enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
          Login
        </button>
      </div>
    </form>

  </div>
</div>
@endsection