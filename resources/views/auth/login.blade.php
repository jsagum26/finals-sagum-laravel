<x-guest-layout>
  <!-- Session Status -->
  <x-auth-session-status class="mb-4" :status="session('status')" />

  <div class="card mb-3">
    <div class="card-body">
      <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
        <p class="text-center small">Enter your email & password to login</p>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="col-12">
          <x-input-label for="email" :value="__('Email')" class="form-label" />
          <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
          <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
        </div>

        <!-- Password -->
        <div class="col-12">
          <x-input-label for="password" :value="__('Password')" class="form-label" />

          <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />

          <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <!-- Remember Me -->
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" name="remember" id="remember_me" type="checkbox" />
            <label class="form-check-label" for="remember_me">{{ __('Remember me') }}</label>
          </div>
        </div>

        <div class="col-12">
          @if (Route::has('password.request'))
          <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}"> {{ __('Forgot your password?') }} </a>
          @endif

          <x-primary-button class="btn btn-primary w-100"> {{ __('Log in') }} </x-primary-button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
