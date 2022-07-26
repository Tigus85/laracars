<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate();
        //dd($cars);
        return view("cars.index", compact(("cars")));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {

        // $request->validate([
        //     "brand" => ["required", "min:3"],
        //     "serie" => ["required"],
        //     "price" => ["required"],
        //     "energy" => ["required"],
        //     "power" => ["required", "integer"],
        //     "release_date" => ["required", "date"],
        //     "weight" => ["required","integer"],
        //     "thumbnail" => ["required","url"]
        // ]);


        
        $car = new Car;
        $car->brand = $request->brand;
        $car->serie = $request->serie;
        $car->price = $request->price;
        $car->energy = $request->energy;
        $car->power = $request->power;
        $car->release_date = $request->release_date;
        $car->weight = $request->weight;
        $car->thumbnail = $request->thumbnail;
        $car->save();
        
        return redirect()->route("cars.index");
        //dd($car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        // dd($car);
        return view("cars.show",compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $cars = Car::all();
        $data = $cars->find($car);

        // $data = Car::select("*")->where(['id => $car->id])->firstOrFail();

        // dd($data);
        return view("cars.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
