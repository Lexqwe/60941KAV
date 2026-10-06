<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Gate;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('cars', [
            'cars' => Car::paginate($perpage)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'license_plate' => 'required|max:20|unique:cars,license_plate',
            'category_id' => 'required|exists:categories,id',
            'brand' => 'required|max:50',
            'model' => 'required|max:50',
            'year' => 'required|integer|min:1990',
            'color' => 'required|max:50',
            'price_per_day' => 'required|numeric|min:0',
            'status' => 'required|in:available,rented,repair',
        ]);

        Car::create($validated);

        return redirect('/cars');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (!Gate::allows('edit-car', Car::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message', 'У вас нет разрешения на редактирование машины номер ' . $id);
        }

        return view('car_edit', [
            'car' => Car::all()->where('id', '=', $id)->first(),
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'license_plate' => 'required|max:20|unique:cars,license_plate,' . $id,
            'category_id' => 'required|exists:categories,id',
            'brand' => 'required|max:50',
            'model' => 'required|max:50',
            'year' => 'required|integer|min:1990',
            'color' => 'required|max:50',
            'price_per_day' => 'required|numeric|min:0',
            'status' => 'required|in:available,rented,repair',
        ]);

        $car = Car::all()->where('id', '=', $id)->first();
        $car->update($validated);

        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Gate::allows('destroy-car', Car::all()->where('id', $id)->first())) {
            return redirect('/error')->with('message', 'У вас нет разрешения на удаление машины номер ' . $id);
        }

        Car::destroy($id);
        return redirect('/cars');
    }
}
