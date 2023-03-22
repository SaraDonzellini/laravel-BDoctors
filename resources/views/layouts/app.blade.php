<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')   
    </title>

    <link rel="shortcut icon" href="{{ asset('assets/imgs/Doctor-logo.png')}}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Link Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        <!--Header-->
        <header>
            <nav class="navbar navbar-expand-md shadow-sm navbar-dark">
                <div class="container">
                    <a style="width: 40px;" class="navbar-brand d-flex align-items-center" href="{{ route('admin.dashboard') }}">
                        <img class="img-fluid" src="{{ asset('assets/imgs/Doctor-logo.png') }}" alt="Bdoctor's logo">
                    </a>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item d-flex flex-column text-center me-3">
                                <div class="box d-flex justify-content-center">
                                    <a class="nav-link {{ (Route::currentRouteName() == 'admin.dashboard') ? 'fw-bold' : ''  }}" href="{{ route('admin.dashboard') }}">
                                        <i class="fa-solid fa-solar-panel" style="color: #00c3a5;"></i>
                                        <span class="d-block">{{ __('Dashboard') }}</span>
                                    </a>

                                </div>
                            </li>
    
                            <li class="nav-item d-flex flex-column text-center me-3">
                                <div class="box d-flex justify-content-center">
                                <a class="nav-link {{ (Route::currentRouteName() == 'admin.doctors.index') ? 'fw-bold' : ''  }}" href="{{ route('admin.doctors.index') }}">
                                    <i class="fa-solid fa-address-card" style="color: #00c3a5;"></i>
                                    <span class="d-block">{{ __('Profilo Dottore') }}</span>
                                </a></div>
                            </li>

                            <li class="nav-item d-flex flex-column text-center me-3">
                                <a class="nav-link {{ (Route::currentRouteName() == 'admin.messages.index') ? 'fw-bold' : ''  }}" href="{{ route('admin.messages.index') }}">
                                    <i class="fa-solid fa-envelope" style="color: #00c3a5;"></i>
                                    <span class="d-block">
                                        {{ __('Messaggi') }}
                                    </span>
                                </a>
                            </li>
    
                            <li class="nav-item d-flex flex-column text-center me-3">
                                <a class="nav-link {{ (Route::currentRouteName() == 'admin.reviews.index') ? 'fw-bold' : ''  }}" href="{{ route('admin.reviews.index') }}">
                                    <i class="fa-regular fa-comment" style="color: #00c3a5;"></i>
                                    <span class="d-block">
                                        {{ __('Recensioni') }}
                                    </span>
                                </a>
                            </li>
    
                            <li class="nav-item d-flex flex-column text-center me-3">
                                <a class="nav-link {{ (Route::currentRouteName() == 'admin.sponsorships.index') ? 'fw-bold' : ''  }}" href="{{ route('admin.sponsorships.index') }}">
                                    <i class="fa-solid fa-money-bill-trend-up" style="color: #00c3a5;"></i>
                                    <span class="d-block">
                                        {{ __('Sponsorizzazioni') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
    
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Accedi') }}</a>
                            </li>

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-dark
                                " aria-labelledby="navbarDropdown" style="background-color: #00244a;">
                                    <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profilo Utente')}}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Esci') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!--Main-->
        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>
