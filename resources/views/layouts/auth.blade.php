@extends('layouts.app', [
    'html_class' => 'h-100',
    'body_class' => 'h-100 d-flex flex-column',
])

@section('body')
    <div class="container my-auto py-3">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="mb-5">
                    @yield('content')
                </div>
                <p class="text-center mb-0">
                    @auth
                        <a class="text-body" href="{{ route('logout') }}" onclick="event.preventDefault(); logout()">{{ __('Logout') }}</a>
                        &bull;
                    @endauth
                    <a class="text-body" href="">{{ __('Privacy policy') }}</a>
                    &bull;
                    <a class="text-body" href="">{{ __('Terms of service') }}</a>
                    &bull;
                    <strong>{{ config('app.name') }}</strong> &copy; {{ date('Y') }}
                </p>
            </div>
        </div>
    </div>
@endsection
