<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('build/assets/app.3ee71b8a.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.73168167.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.d9cff854.css') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/admin.8d300dbd.css') }}">
    @vite('resources/css/app.css')
    @vite('resources/scss/admin.scss')
</head>

<body>
    <header x-data="{
        active: false,
        toggleMenu() {
            this.active = !this.active
        },
        isSticky: false
    }" class="not-home">

        <div class="topbar">
            <h3 class="logo">Administration</h3>
            <ul class="menu" :class="active ? 'active' : ''">
                <li class="active"><a href="{{ route('fr.home') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
            <div class="menu-bars" @click="toggleMenu()">
                <i class="fa-solid fa-bars" x-show="!active"></i>
                <i class="fa-solid fa-close" x-show="active"></i>
            </div>
        </div>

    </header>


    <div class="content container">
        @yield('content')

    </div>

    @vite('resources/js/app.js')
    <script src="{{ asset('build/assets/app.d933138c.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>
