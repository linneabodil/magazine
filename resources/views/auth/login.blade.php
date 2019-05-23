@extends('shell')

@section('content')
<div class="row container login">
  <form class="col-5" method="POST" action="{{ route('login') }}">
      @csrf

      <div class="form-group">
        <label for="email">{{ __('Mejladress') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group">
        <label for="password">{{ __('Lösenord') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>

      <div class="form-group form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            {{ __('Kom ihåg mig') }}
        </label>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Logga in') }}
        </button>

        @if (Route::has('password.request'))
            <a class="btn" href="{{ route('password.request') }}">
                {{ __('Glömt lösenord?') }}
            </a>
        @endif
      </div>
  </form>
  <div class="col-7">
      <img src="../public/image/login.jpeg" alt="">
  </div>
</div>

@endsection
