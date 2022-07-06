<x-guest-layout>

    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
          <div class="card login-card">
            <div class="row no-gutters">
              <div class="col-md-5">
                <img src="../images/login.jpg" alt="login" class="login-card-img">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <div class="brand-wrapper">
                    <img src="../images/logo.svg" alt="logo" class="logo">
                  </div>
                  <p class="login-card-description">Sign into your account</p>
                  

                    @if (session('status'))
                        <div class="alert alert-success mb-3 rounded-0" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <x-jet-validation-errors class="mb-3 rounded-0" />
                        <div class="mb-3">
                            <x-jet-label value="{{ __('Username') }}" />
        
                            <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="username"
                                         name="username" :value="old('username')" required />
                            <x-jet-input-error for="username"></x-jet-input-error>
                        </div>

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

                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <label class="" for="remember_me">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="d-flex justify-content-end align-items-baseline">
                                @if (Route::has('password.request'))
                                    <a class="text-muted me-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
        
                                <x-jet-button>
                                    {{ __('Log in') }}
                                </x-jet-button>
                            </div>
                        </div>
                    </form>       
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</x-guest-layout>