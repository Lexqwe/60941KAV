<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Пользователь и его заказы</h2>
<table border="1">
    <thead>
    <tr>
        <td>id пользователя</td>
        <td>Фамилия</td>
        <td>Имя</td>
        <td>id заказа</td>
        <td>Стоимость</td>
    </tr>
    </thead>
    <tbody>
    @foreach($user->orders as $order)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $order->id }}</td>
            <td>{{ $order->total_cost }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
