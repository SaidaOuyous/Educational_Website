    @extends('layouts.app')

    @section('content')
    <div class="container" style="width: 100%;">
        <div class="row justify-content-center p-5">
            <div class="col-md-5">
                <div class="card mb-5 p-4" style="box-shadow: 5px 5px 10px grey; background-color: #F5F7F8; border: 1px solid #FFD93D;">
                    <div class="mt-5 mb-3" style="color: #000; text-align: center; font-weight: 600; font-size: 26px;">{{ __('Register') }}</div>

                    <div class="card-body" style="padding: 20px;">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3" style="border-bottom: none; padding: 5px;">
                                <label for="name" class="form-label" style="color: #000;">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-3" style="border-bottom: none; padding: 5px;">
                                <label for="email" class="form-label" style="color: #000;">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Degree -->
                            <div class="mb-3" style="border-bottom: none; padding: 5px;">
                                            <label for="degree" class="form-label" style="color: #000; display: block;">{{ __('Degree') }}</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="degree" id="degree_ids" value="IDS" {{ old('degree') == 'IDS' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="degree_ids">IDS</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="degree" id="degree_is" value="IS" {{ old('degree') == 'IS' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="degree_is">IS</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="degree" id="degree_erp" value="ERP" {{ old('degree') == 'ERP' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="degree_erp">ERP</label>
                                            </div>
                                            @error('degree')
                                                <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                    </div>
                            </div>

                            <!-- Password -->
                            
                            <div class="mb-3" style="border-bottom: none; padding: 5px;">
                                <label for="password" class="form-label" style="color: #000;">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3" style="border-bottom: none; padding: 5px;">
                                <label for="password-confirm" class="form-label" style="color: #000;">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="border: none; border-bottom: 1px solid grey; padding: 5px; height: 30px;">
                            </div>

                            <!-- Register Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" style="border-radius: 40px; border-color: #FFD93D; background: linear-gradient(45deg, #FFD93D, #FF8400); width: 100%; padding: 10px;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
