@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content-inner')
{{-- Card --}}
<div class="card sm:max-w-sm mx-auto">
    <div class="card-header">{{ __('Reset Password') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            {{-- E-Mail Address --}}
            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus v-focus>

                @error('email')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Buttons --}}
            <div class="form-group mt-4 mb-1">
                <button type="submit" class="btn btn-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>

{{-- Links --}}
<p class="mt-8 text-sm text-center">
    <a href="{{ route('login') }}" class="text-sm text-gray-500 hover:text-gray-600">
        ← {{ __('Back') }}
    </a>
</p>
@endsection
