<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>AutoMoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{url('css/style.css')}}">
    <script src='index.js'></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
              <img src="Slike/slikazanavbar.png" width="100" height="50" class="d-inline-block align-top" alt="AutoMoto">
              <a class="navbar-brand" href="index.html">AutoMoto</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link" href="onama.html">O nama</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="kontaktirajtenas.html">Kontaktirajte nas</a>
                  </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="prijavise.html"> Prijavi se</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="registrirajse.html"> Registriraj se</a>
                    </li>
                  </ul>
              </div>
            </div>
        </nav>
    </header>

    
      <x-guest-layout>
      <x-jet-authentication-card>
      
          <x-slot name="logo">
              
          </x-slot>

          <x-jet-validation-errors class="mb-4" />

          <form method="POST" action="{{ route('register') }}">
              @csrf

              <div>
                  <x-jet-label for="name" value="{{ __('Name') }}" />
                  <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
              </div>

              <div class="mt-4">
                  <x-jet-label for="email" value="{{ __('Email') }}" />
                  <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
              </div>

              <div class="mt-4">
                  <x-jet-label for="password" value="{{ __('Password') }}" />
                  <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
              </div>

              <div class="mt-4">
                  <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                  <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
              </div>

              @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                  <div class="mt-4">
                      <x-jet-label for="terms">
                          <div class="flex items-center">
                              <x-jet-checkbox name="terms" id="terms"/>

                              <div class="ml-2">
                                  {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                          'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                          'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                  ]) !!}
                              </div>
                          </div>
                      </x-jet-label>
                  </div>
              @endif

              <div class="flex items-center justify-end mt-4">
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="prijavise.html">
                      {{ __('Already registered?') }}
                  </a>

                  <x-jet-button class="ml-4">
                      {{ __('Register') }}
                  </x-jet-button>
              </div>
          </form>
      </x-jet-authentication-card>
  </x-guest-layout>



    <footer>
      <nav class="navbar navbar-dark fixed-bottom bg-dark text-light">
        <div class="container ">
          <p1 class="center">AutoMoto</p1>
        </div>
        </nav>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>