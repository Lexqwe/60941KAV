<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Список заказов</h2>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>Итоговая стоимость</td>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->total_cost }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
