<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-41</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Добавление машины</h2>
<form method="post" action={{url('car')}}>
    @csrf
    <label>Госномер</label>
    <input type="text" name="license_plate" value="{{ old('license_plate') }}"/>
    @error('license_plate')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Марка</label>
    <input type="text" name="brand" value="{{ old('brand') }}"/>
    @error('brand')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Модель</label>
    <input type="text" name="model" value="{{ old('model') }}"/>
    @error('model')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Год</label>
    <input type="text" name="year" value="{{ old('year') }}"/>
    @error('year')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цвет</label>
    <input type="text" name="color" value="{{ old('color') }}"/>
    @error('color')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Цена за день</label>
    <input type="text" name="price_per_day" value="{{ old('price_per_day') }}"/>
    @error('price_per_day')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Статус</label>
    <select name="status">
        <option value="available" @if(old('status') == 'available') selected @endif>Доступна</option>
        <option value="rented" @if(old('status') == 'rented') selected @endif>В аренде</option>
        <option value="repair" @if(old('status') == 'repair') selected @endif>На ремонте</option>
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
                    @if(old('category_id') == $category->id) selected
                @endif>{{$category->name}}
            </option>
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
