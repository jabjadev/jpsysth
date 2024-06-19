<!doctype html>
<html lang="{{ config('app.locale') }}">

{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- JAPAN SYSTEM (THAILAND) COMPANY LIMITED --}}
    <title>{{ __('messages.NavTitle') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/nav/logo.png') }}">

    {{-- Font here --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    {{-- Bootstrap CSS here --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>


    {{-- CSS file here --}}
    <link rel="stylesheet" href="{{ asset('assets/css/stylesheet.css') }}">

</head>

{{-- <body style="background-image: url('assets/image/bg.jpg');"> --}}

<body background="{{ asset('assets/image/bg.jpg') }}">
    @yield('before')

    <div class="shadow p-3 mb-5 rounded bg-white sticky-top">
        <div class="contaier-fluid bg-white">
            <nav class="navbar fs-6 navbar-expand-lg">
                <div class="collapse navbar-collapse">
                    <a href="{{ LaravelLocalization::localizeUrl('/') }}" aria-current="page">
                        <img href="" width=300px src="{{ asset('assets/image/nav/nav_head.png') }}"
                            alt="Responsive image">
                    </a>
                    <ul class="navbar-nav ms-auto ">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="{{ LaravelLocalization::localizeUrl('#') }}"
                                    class="nav-link active text-secondary" aria-current="page">
                                    {{ __('messages.NavNewRelease') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="{{ LaravelLocalization::localizeUrl('#') }}" class="nav-link dropdown-toggle"
                                    href="{{ url('#') }}" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ __('messages.NavSolution') }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li>
                                        <a href="{{ LaravelLocalization::localizeUrl('/it-service') }}"
                                            class="dropdown-item">
                                            {{ __('messages.NavITService') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ LaravelLocalization::localizeUrl('/online-marketing') }}"
                                            class="dropdown-item">
                                            {{ __('messages.NavOnlineMarketing') }}
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ LaravelLocalization::localizeUrl('/company') }}">
                                    {{ __('messages.NavCompany') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ LaravelLocalization::localizeUrl('/contact') }}">
                                    {{ __('messages.NavContact') }}
                                </a>
                            </li>
                        </ul>





                        @php
                        $currentLocale = app()->getLocale();
                        $localesInfo = [
                            'en' => ['flag' => 'assets/image/language/english.png', 'name' => __('messages.NavEnglish')],
                            'th' => ['flag' => 'assets/image/language/thailand.png', 'name' => __('messages.NavThai')],
                            'ja' => ['flag' => 'assets/image/language/japan.png', 'name' => __('messages.NavJapan')],
                            // Add more lang here
                        ];
                        @endphp

                        <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset($localesInfo[$currentLocale]['flag']) }}" width="20px" height="auto">
                                  {{ $localesInfo[$currentLocale]['name'] }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item outline-dark" value="ja"
                                        href="{{ LaravelLocalization::getLocalizedURL('ja') }}">
                                        <img src="{{ asset('assets/image/language/japan.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavJapan') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" value="th"
                                        href="{{ LaravelLocalization::getLocalizedURL('th') }}">
                                        <img src="{{ asset('assets/image/language/thailand.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavThai') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" value="en"
                                        href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                        <img src="{{ asset('assets/image/language/english.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavEnglish') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><img src="{{ asset('assets/image/language/language.png') }}"
                                    width="20px" height="auto">
                                &nbsp; {{ __('messages.NavLanguage') }}
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item outline-dark" value="ja"
                                        href="{{ LaravelLocalization::getLocalizedURL('ja') }}">
                                        <img src="{{ asset('assets/image/language/japan.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavJapan') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" value="th"
                                        href="{{ LaravelLocalization::getLocalizedURL('th') }}">
                                        <img src="{{ asset('assets/image/language/thailand.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavThai') }}
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" value="en"
                                        href="{{ LaravelLocalization::getLocalizedURL('en') }}">
                                        <img src="{{ asset('assets/image/language/english.png') }}" width="20px"
                                            height="auto">
                                        &nbsp; {{ __('messages.NavEnglish') }}
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
