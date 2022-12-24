<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tourist guide in Madagascar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('build/assets/app.3ee71b8a.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.73168167.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.d9cff854.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/scss/app.scss')
</head>

<body>


    @php
        use App\Models\Logo;

        getIp();
        getUserSession();
        $logo = Logo::all()->first();
    @endphp

    <header x-data="{
        active: false,
        toggleMenu() {
            this.active = !this.active
        },
        isSticky: false
    }" class="@if (Route::currentRouteName() !== 'home') not-home @endif">
        @if (Route::currentRouteName() === 'home')
            {{-- Nabar --}}
            <div class="topbar" :class="isSticky ? 'sticky' : ''"
                @scroll.window="isSticky = (window.pageYOffset > 20) ? true : false">
                <h3 class="logo">{!! $logo->content !!}</h3>
                <ul class="menu" :class="active ? 'active' : ''">
                    <li class="active"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="dropdown-list">
                        <a href="#">Circuit</a>
                        <ul class="dropdown-list-item">
                            <li><a href="{{ route('en.circuit.lemur') }}">SPECIAL VISIT GRAND LEMUR OF MADAGASCAR</a>
                            </li>
                            <hr>
                            <li><a href="{{ route('en.circuit.bemaraha') }}">TSINGY OF BEMARAHA- TSIRIBIHINA</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('en.contact') }}">Contact</a></li>
                    <li>
                        <a href="{{ route('fr.home') }}">FR <i class="fa-solid fa-language"></i></a>
                    </li>
                </ul>
                <div class="menu-bars" @click="toggleMenu()">
                    <i class="fa-solid fa-bars" x-show="!active"></i>
                    <i class="fa-solid fa-close" x-show="active"></i>
                </div>
            </div>
            {{-- hero section --}}
            <div class="header-body">
                <div class="content">
                    <h3>The greatest reward, luxury travel</h3>
                    <h1>Leaving for unknown lands</h1>
                    <button class="about">Explorez</button>
                </div>
            </div>
        @else
            <div class="topbar">
                <h3 class="logo">{!! $logo->content !!}</h3>
                <ul class="menu" :class="active ? 'active' : ''">
                    <li class="active"><a href="{{ route('home') }}">HOME</a></li>
                    <li class="dropdown-list">
                        <a href="#">Circuit</a>
                        <ul class="dropdown-list-item">
                            <li><a href="{{ route('en.circuit.lemur') }}">SPECIAL VISIT GRAND LEMUR OF MADAGASCAR</a>
                            </li>
                            <hr>
                            <li><a href="{{ route('en.circuit.bemaraha') }}">TSINGY OF BEMARAHA- TSIRIBIHINA</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('home') }}#about">About</a></li>
                    <li><a href="{{ route('en.contact') }}">Contact</a></li>
                    <li>
                        <a href="{{ route('fr.home') }}">FR <i class="fa-solid fa-language"></i></a>
                    </li>
                </ul>
                <div class="menu-bars" @click="toggleMenu()">
                    <i class="fa-solid fa-bars" x-show="!active"></i>
                    <i class="fa-solid fa-close" x-show="active"></i>
                </div>
            </div>
        @endif
    </header>


    @yield('content')
    {{-- Footer --}}

    <footer>
        <div class="content">
            <h3>CONTACT</h3>
            <p><i class="fa-solid fa-location-dot"></i> Antsirabe 110</p>
            <p><i class="fa fa-phone"></i> Tel: 034 43 435 54</p>
            <p><i class="fa fa-envelope"></i> Email: 034 43 435 54</p>
            <div class="copyright">
                <p><i class="fa-solid fa-copyright"></i> 2022: copyright</p>
                <p>Developed by Fenohery RAKOTONIAINA</p>
            </div>
        </div>
    </footer>


    @yield('extra-js')
    @vite('resources/js/app.js')
    <script src="{{ asset('build/assets/app.d933138c.js') }}"></script>
</body>

</html>
