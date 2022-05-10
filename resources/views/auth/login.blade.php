@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-8 col-lg-4">
            <div class="card">
                <h4 class="card-header text-center">{{ __('登入') }}</h4>

                <div class="card-body row">
                    <form method="POST" action="{{ route('login') }}" class="col-12 col-lg-8 mx-auto">
                        @csrf

                        <div class="row mb-3">
                            <label for="email">{{ __('帳號') }}</label>

                            <div class="col">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password">{{ __('密碼') }}</label>

                            <div class="col">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col text-center">
                                <button type="submit" class="btn btn-warning w-100 my-2">
                                    {{ __('登入') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="link-secondary my-2" href="{{ route('password.request') }}">
                                        {{ __('忘記密碼?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
