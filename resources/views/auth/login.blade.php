@extends('layouts.app')

@section('content')
<div class="container " style="width:100%; ">
    <div class="row justify-content-center p-5">
        <div class="col-md-4" >
            <div class="card mb-5 p-4" style=" box-shadow: 5px 5px 10px grey;background-color:#F5F7F8;border:1px solid #FFD93D">
                <div class="mt-5 mb-3" style=" color: #000; text-align:center ; font-weight :600;font-size:26px;">{{ __('Se Connecter') }}</div>

                <div class="card-body" style="padding: 20px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3" style=" border-bottom: none; padding: 5px;">
                            <label for="email" class="form-label" style="color: #000;">{{ __('Adresse Email ') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3" style=" border-bottom: none; padding: 5px;">
                            <label for="password" class="form-label" style="color: #000;">{{ __('Mote de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember" style="color: #000;">
                                    {{ __('Se souvenir de moi') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="border-radius:40px ;border-color:#FFD93D;background: linear-gradient(45deg, #FFD93D, #FF8400); width: 100%;padding:10px">
                                {{ __('Se connecter') }}
                            </button>
                        </div>
                    </form>

                    @if (Route::has('password.request'))
                        <div class="mt-3 mb-4">
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #000;">
                                {{ __('mot de passe oublier?') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
