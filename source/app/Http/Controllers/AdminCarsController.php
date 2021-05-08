<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Car;
use Illuminate\Support\Str;

class AdminCarsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $filters = [];
        $title = $request->get('title');
        $id = $request->get('id');

        $cars = new Car();
        $cars = $cars->orderBy('id', 'desc')->paginate(10);

        return view('admin.cars.index', [
            'cars'   => $cars,
            'filters' => $filters,
        ]);
    }

    public function create()
    {
        return view('admin.cars.create-update', [
            'car' => new Car()
        ]);
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('admin.cars.create-update', [
            'car' => $car
        ]);
    }

    public function update($id, Request $request)
    {
        $title = $request->post('title');
        $body = $request->post('body');
        $parent = $request->post('parent');
        $series = $request->post('series');

        $p = Car::findOrFail($id);
        $p->title = $title;
        $p->body = $body;
        $p->parent = $parent;
        $p->series = $series;
        $p->save();

        return redirect()->route('admin.cars.edit', ['id' => $p->id]);
    }
}
