@extends('layout')

@section('title', 'Редактирование машины')

@section('content')
    <div class="container mt-4">
        <h2>Редактирование машины</h2>

        <form method="post" action="{{ url('car/update/'.$car->id) }}" class="mt-3">
            @csrf

            <div class="mb-3">
                <label class="form-label">Госномер</label>
                <input type="text" name="license_plate" value="{{ old('license_plate', $car->license_plate) }}"
                       class="form-control @error('license_plate') is-invalid @enderror">
                @error('license_plate') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Категория</label>
                <select name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                    <option value="">— Выберите категорию —</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if(old('category_id', $car->category_id) == $category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Марка</label>
                <input type="text" name="brand" value="{{ old('brand', $car->brand) }}"
                       class="form-control @error('brand') is-invalid @enderror">
                @error('brand') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Модель</label>
                <input type="text" name="model" value="{{ old('model', $car->model) }}"
                       class="form-control @error('model') is-invalid @enderror">
                @error('model') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Год</label>
                <input type="text" name="year" value="{{ old('year', $car->year) }}"
                       class="form-control @error('year') is-invalid @enderror">
                @error('year') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Цвет</label>
                <input type="text" name="color" value="{{ old('color', $car->color) }}"
                       class="form-control @error('color') is-invalid @enderror">
                @error('color') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Цена за день</label>
                <input type="text" name="price_per_day" value="{{ old('price_per_day', $car->price_per_day) }}"
                       class="form-control @error('price_per_day') is-invalid @enderror">
                @error('price_per_day') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Статус</label>
                <select name="status" class="form-select @error('status') is-invalid @enderror">
                    <option value="available" @if(old('status', $car->status) == 'available') selected @endif>Доступна</option>
                    <option value="rented" @if(old('status', $car->status) == 'rented') selected @endif>В аренде</option>
                    <option value="repair" @if(old('status', $car->status) == 'repair') selected @endif>На ремонте</option>
                </select>
                @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
            <a href="/cars" class="btn btn-secondary">Назад</a>
        </form>
    </div>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <title>609-41</title>--}}
{{--    <style> .is-invalid { color: red; } </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h2>Редактирование машины</h2>--}}
{{--<form method="post" action="{{ url('car/update/'.$car->id) }}">--}}
{{--    @csrf--}}
{{--    <label>Госномер</label>--}}
{{--    <input type="text" name="license_plate" value="@if (old('license_plate')) {{old('license_plate')}} @else {{$car->license_plate}} @endif"/>--}}
{{--    @error('license_plate')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Марка</label>--}}
{{--    <input type="text" name="brand" value="@if (old('brand')) {{old('brand')}} @else {{$car->brand}} @endif"/>--}}
{{--    @error('brand')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Модель</label>--}}
{{--    <input type="text" name="model" value="@if (old('model')) {{old('model')}} @else {{$car->model}} @endif"/>--}}
{{--    @error('model')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Год</label>--}}
{{--    <input type="text" name="year" value="@if (old('year')) {{old('year')}} @else {{$car->year}} @endif"/>--}}
{{--    @error('year')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Цвет</label>--}}
{{--    <input type="text" name="color" value="@if (old('color')) {{old('color')}} @else {{$car->color}} @endif"/>--}}
{{--    @error('color')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Цена за день</label>--}}
{{--    <input type="text" name="price_per_day" value="@if (old('price_per_day')) {{old('price_per_day')}} @else {{$car->price_per_day}} @endif"/>--}}
{{--    @error('price_per_day')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Статус</label>--}}
{{--    <select name="status">--}}
{{--        <option value="available" @if(old('status', $car->status) == 'available') selected @endif>Доступна</option>--}}
{{--        <option value="rented" @if(old('status', $car->status) == 'rented') selected @endif>В аренде</option>--}}
{{--        <option value="repair" @if(old('status', $car->status) == 'repair') selected @endif>На ремонте</option>--}}
{{--    </select>--}}
{{--    @error('status')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <label>Категория:</label>--}}
{{--    <select name="category_id" value="{{ old('category_id') }}">--}}
{{--        <option style="display:none">--}}
{{--        @foreach ($categories as $category)--}}
{{--            <option value="{{$category->id}}"--}}
{{--                    @if(old('category_id'))--}}
{{--                        @if(old('category_id') == $category->id) selected @endif--}}
{{--                    @else--}}
{{--                        @if($car->category_id == $category->id) selected @endif--}}
{{--                @endif >{{$category->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    @error('category_id')--}}
{{--    <div class="is-invalid">{{ $message }}</div>--}}
{{--    @enderror--}}
{{--    <br>--}}
{{--    <input type="submit">--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
