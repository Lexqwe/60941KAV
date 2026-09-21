<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Услуга и её заказы</h2>
<table border="1">
    <thead>
    <tr>
        <td>id услуги</td>
        <td>Название</td>
        <td>id заказа</td>
        <td>Стоимость</td>
        <td>Количество</td>
    </tr>
    </thead>
    <tbody>
    @foreach($service->orders as $order)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->name }}</td>
            <td>{{ $order->id }}</td>
            <td>{{ $order->total_cost }}</td>
            <td>{{ $order->pivot->quantity }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
