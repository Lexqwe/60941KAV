@extends('layout')

@section('title', 'Список машин')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Список машин</h2>
            <a href="/car/create" class="btn btn-success">Добавить машину</a>
        </div>

        <table class="table table-bordered table-striped table-hover">
            <thead class="table-light">
            <tr>
                <th>id</th>
                <th>Госномер</th>
                <th>Марка</th>
                <th>Модель</th>
                <th>Год</th>
                <th>Цвет</th>
                <th>Цена</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->license_plate }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->price_per_day }}</td>
                    <td>{{ $car->status }}</td>
                    <td>
                        <a href="/car/edit/{{ $car->id }}" class="btn btn-sm btn-warning">Редактировать</a>
                        <a href="/car/destroy/{{ $car->id }}" class="btn btn-sm btn-danger">Удалить</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $cars->links() }}
        </div>
    </div>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>609-41</title>--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--    <style> .is-invalid { color: red; } </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Список машин</h2>--}}

{{--<a href="/car/create">Добавить машину</a>--}}

{{--<table border="1">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <td>id</td>--}}
{{--        <td>Госномер</td>--}}
{{--        <td>Марка</td>--}}
{{--        <td>Модель</td>--}}
{{--        <td>Год</td>--}}
{{--        <td>Цвет</td>--}}
{{--        <td>Цена</td>--}}
{{--        <td>Статус</td>--}}
{{--        <td>Действия</td>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($cars as $car)--}}
{{--        <tr>--}}
{{--            <td>{{ $car->id }}</td>--}}
{{--            <td>{{ $car->license_plate }}</td>--}}
{{--            <td>{{ $car->brand }}</td>--}}
{{--            <td>{{ $car->model }}</td>--}}
{{--            <td>{{ $car->year }}</td>--}}
{{--            <td>{{ $car->color }}</td>--}}
{{--            <td>{{ $car->price_per_day }}</td>--}}
{{--            <td>{{ $car->status }}</td>--}}
{{--            <td>--}}
{{--                <a href="/car/edit/{{ $car->id }}">Редактировать</a>--}}
{{--                |--}}
{{--                <a href="/car/destroy/{{ $car->id }}">Удалить</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--{{ $cars->links() }}--}}

{{--</body>--}}
{{--</html>--}}
