<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar scroll</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/cars">Машины</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href= {{url('car')}} id="navbarScrollingDropdown"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href= {{url('car')}}>Action</a></li>
                        <li><a class="dropdown-item" href={{url('car/create')}}>Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Заказы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Клиенты</a>
                </li>
            </ul>
            <div class="d-flex align-items-center">
                @if(!Auth::user())
                    <form class="d-flex" method="post" action="{{url('auth')}}">
                        @csrf
                        <input class="form-control me-2" type="text" placeholder="Логин" name="email" value="{{ old('email') }}">
                        <input class="form-control me-2" type="password" placeholder="Пароль" name="password">
                        <button class="btn btn-outline-success" type="submit">Войти</button>
                    </form>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item d-flex align-items-center me-3">
                            <i class="fa fa-user me-1"></i>
                            <span>{{ Auth::user()->name }}</span>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-outline-danger" href="{{url('logout')}}">Выйти</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</nav>


{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>609-41</title>--}}
{{--    <style> .is-invalid { color: red; }</style>--}}
{{--</head>--}}
{{--<body>--}}
{{--@if($user)--}}
{{--    <h2>Здравствуйте, {{ $user->name }}</h2>--}}
{{--    <a href="{{url('logout')}}">Выйти из системы</a>--}}
{{--@else--}}
{{--    <h2>Вход в систему</h2>--}}
{{--    <form method="post" action="{{url('auth')}}">--}}
{{--        @csrf--}}
{{--        <label>E-mail</label>--}}
{{--        <input type="text" name="email" value="{{ old('email') }}">--}}
{{--        @error('email')--}}
{{--        <div class="is-invalid">{{$message}}</div>--}}
{{--        @enderror--}}
{{--        <br>--}}
{{--        <label>Пароль</label>--}}
{{--        <input type="password" name="password">--}}
{{--        @error('password')--}}
{{--        <div class="is-invalid">{{$message}}</div>--}}
{{--        @enderror--}}
{{--        <br>--}}
{{--        <input type="submit">--}}
{{--        @error('error')--}}
{{--        <div class="is-invalid">{{$message}}</div>--}}
{{--        @enderror--}}
{{--    </form>--}}
{{--@endif--}}
{{--</body>--}}
{{--</html>--}}
