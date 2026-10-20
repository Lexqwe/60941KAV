<div class="container" style="margin-top: 80px">
    @error('email')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror

    @error('password')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror

    @error('error')
    <div class="alert alert-warning" role="alert">
        {{ $message }}
    </div>
    @enderror

    @error('success')
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
    @enderror
</div>

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>609-41</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <h2>{{ $message }}</h2>--}}
{{--    <a href="{{ url('cars') }}">Назад</a>--}}
{{--</body>--}}
{{--</html>--}}
