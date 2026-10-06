<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
    <style> .is-invalid { color: red; }</style>
</head>
<body>
@if($user)
    <h2>Здравствуйте, {{ $user->name }}</h2>
    <a href="{{url('logout')}}">Выйти из системы</a>
@else
    <h2>Вход в систему</h2>
    <form method="post" action="{{url('auth')}}">
        @csrf
        <label>E-mail</label>
        <input type="text" name="email" value="{{ old('email') }}">
        @error('email')
        <div class="is-invalid">{{$message}}</div>
        @enderror
        <br>
        <label>Пароль</label>
        <input type="password" name="password">
        @error('password')
        <div class="is-invalid">{{$message}}</div>
        @enderror
        <br>
        <input type="submit">
        @error('error')
        <div class="is-invalid">{{$message}}</div>
        @enderror
    </form>
@endif
</body>
</html>
