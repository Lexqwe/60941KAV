<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Заказ и его пользователь</h2>
<table border="1">
    <thead>
    <tr>
        <td>id заказа</td>
        <td>Стоимость</td>
        <td>id пользователя</td>
        <td>Фамилия</td>
        <td>Имя</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->total_cost }}</td>
        <td>{{ $order->user->id }}</td>
        <td>{{ $order->user->last_name }}</td>
        <td>{{ $order->user->first_name }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
