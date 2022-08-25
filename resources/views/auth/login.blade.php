<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="../signin/style.css">

  <!-- Scripts -->
  {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
</head>

<body>
  <div class="background-wrap">
    <div class="background"></div>
  </div>

  <form id="accesspanel" action="{{ route('login') }}" method="post">
    @csrf
    <h1 id="litheader">TECH-TRENDZ</h1>
    <div class="inset">
      <x-jet-validation-errors class="mb-3 rounded-0" />
      <p>
        <x-jet-label value="{{ __('Username') }}" />
        <input type="text" name="username" id="username" placeholder="Username">
      </p>
      <div class="mb-3">
        <x-jet-label value="{{ __('Password') }}" />
        <div class="input-group" id="show_hide_password">
          <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
            name="password" required autocomplete="current-password" id="password"></x-jet-input>
          <x-jet-input-error for="password"></x-jet-input-error>
          <span class="input-group-text" onclick="password_show_hide();">

            <i class="mdi mdi-eye-off" id="show_eye"></i>
            <i class="mdi mdi-eye d-none" id="hide_eye"></i>
          </span>
        </div>
      </div>
      <div style="text-align: center;">
        <div class="checkboxouter">
          <input type="checkbox" name="remember" id="remember_me" value="Remember">
          <label class="checkbox"></label>
        </div>
        <label for="remember">Remember me</label>
      </div>
      <input class="loginLoginValue" type="hidden" name="service" value="login" />
    </div>
    <p class="p-container">
      <input type="submit" name="Login" id="go" value="Authorize">
    </p>

    <div class="mb-3">
      <div class="d-flex justify-content-center align-items-baseline">
        @if (Route::has('password.request'))
        <a class="text-muted me-3" href="{{ route('password.request') }}">
          {{ __('Forgot your password?') }}
        </a>
        @endif
      </div>
    </div>

  </form>

  <script src="../signin/signin.js"></script>
</body>

</html>