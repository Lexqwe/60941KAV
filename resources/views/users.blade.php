<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
</head>
<body>
<h2>Список пользователей</h2>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>Фамилия</td>
        <td>Имя</td>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->first_name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
