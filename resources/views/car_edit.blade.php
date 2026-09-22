<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование машины</h2>
<form method="post" action="{{ url('car/update/'.$car->id) }}">
    @csrf
    <label>Госномер</label>
    <input type="text" name="license_plate" value="@if (old('license_plate')) {{old('license_plate')}} @else {{$car->license_plate}} @endif"/>
    @error('license_plate')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Марка</label>
    <input type="text" name="brand" value="@if (old('brand')) {{old('brand')}} @else {{$car->brand}} @endif"/>
    @error('brand')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Модель</label>
    <input type="text" name="model" value="@if (old('model')) {{old('model')}} @else {{$car->model}} @endif"/>
    @error('model')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Год</label>
    <input type="text" name="year" value="@if (old('year')) {{old('year')}} @else {{$car->year}} @endif"/>
    @error('year')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цвет</label>
    <input type="text" name="color" value="@if (old('color')) {{old('color')}} @else {{$car->color}} @endif"/>
    @error('color')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цена за день</label>
    <input type="text" name="price_per_day" value="@if (old('price_per_day')) {{old('price_per_day')}} @else {{$car->price_per_day}} @endif"/>
    @error('price_per_day')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Статус</label>
    <select name="status">
        <option value="available" @if(old('status', $car->status) == 'available') selected @endif>Доступна</option>
        <option value="rented" @if(old('status', $car->status) == 'rented') selected @endif>В аренде</option>
        <option value="repair" @if(old('status', $car->status) == 'repair') selected @endif>На ремонте</option>
    </select>
    @error('status')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Категория:</label>
    <select name="category_id" value="{{ old('category_id') }}">
        <option style="display:none">
        @foreach ($categories as $category)
            <option value="{{$category->id}}"
                    @if(old('category_id'))
                        @if(old('category_id') == $category->id) selected @endif
                    @else
                        @if($car->category_id == $category->id) selected @endif
                @endif >{{$category->name}}</option>
        @endforeach
    </select>
    @error('category_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit">
</form>
</body>
</html>
