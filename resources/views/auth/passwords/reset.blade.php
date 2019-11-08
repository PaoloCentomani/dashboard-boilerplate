@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content-inner')
{{-- Card --}}
<div class="card sm:max-w-sm mx-auto">
    <div class="card-header">{{ __('Reset Password') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            {{-- E-Mail Address --}}
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"{{ ($email ?? old('email')) ? '' : ' autofocus v-focus' }}>

                @error('email')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Password --}}
            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"{{ ($email ?? old('email')) ? ' autofocus v-focus' : '' }}>

                @error('password')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>

                <input id="password-confirm" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">

                @error('password_confirmation')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="form-group mt-4 mb-1">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
