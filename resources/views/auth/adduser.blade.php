<x-app-layout>
    <div class="mask d-flex align-items-center">
      <div class="container p-5">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-10">
            <div class="card">

              <div class="card-body p=5">
                <h4>Add User</h4>
              <form method="POST" action="{{route ('adduser')}}">
                @csrf
                <div class="row">
                  
                  <div class="col-md-6">
                    <div class="form-outline">
                      <x-jet-label value="{{ __('First Name') }}" />
                      <x-jet-input class="{{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname"
                        :value="old('fname')" required autofocus autocomplete="fname" />
                      <x-jet-input-error for="fname"></x-jet-input-error>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-outline">
                      <x-jet-label value="{{ __('Last Name') }}" />
                      <x-jet-input class="{{ $errors->has('lname') ? 'is-invalid' : '' }}" type="text" name="lname"
                        :value="old('lname')" required autofocus autocomplete="lname" />
                      <x-jet-input-error for="lname"></x-jet-input-error>
                    </div>
                  </div>
                </div>
                <div class="form-outline">
                    <x-jet-label value="{{ __('Username') }}" />

                    <x-jet-input class="{{ $errors->has('username') ? 'is-invalid' : '' }}" type="text" name="username"
                                 :value="old('username')" required autofocus autocomplete="username" />
                    <x-jet-input-error for="username"></x-jet-input-error>
                </div>
                <div class="form-outline">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                <div class="form-outline">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>
                <div class="form-outline">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="form-outline">
                      <x-jet-label value="{{ __('Department') }}" />
                      <div>
                        <select name="department" class="form-control">
                          <option value="2">Logistics</option>
                          <option value="3">Finance</option>
                          <option value="4">Core</option>
                          <option value="5">Human Resource</option>
                        </select>
                      </div>
                </div>
                <div class="form-outline">
                      <x-jet-label value="{{ __('Role') }}" />
                     <div>
                        <select name="roles" class="form-control">
                          <option value="manager">Manager</option>
                          <option value="officer">Officer</option>
                        </select>
                      </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                  <div class="card-footer d-flex justify-content-end">
                    <x-jet-button>
                      <div wire:loading class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div>
                      {{ __('Submit') }}
                    </x-jet-button>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>