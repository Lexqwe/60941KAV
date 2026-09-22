<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Список машин</h2>

<a href="/car/create">Добавить машину</a>

<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>Госномер</td>
        <td>Марка</td>
        <td>Модель</td>
        <td>Год</td>
        <td>Цвет</td>
        <td>Цена</td>
        <td>Статус</td>
        <td>Действия</td>
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
                <a href="/car/edit/{{ $car->id }}">Редактировать</a>
                |
                <a href="/car/destroy/{{ $car->id }}">Удалить</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
