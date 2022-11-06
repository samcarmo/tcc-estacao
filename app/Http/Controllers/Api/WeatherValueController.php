<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWeatherValueRequest;
use App\Models\WeatherValue;
use App\Models\Station;
use Illuminate\Http\Request;

class WeatherValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Station $station)
    {
        $weatherValues = WeatherValue::all()->where('station', $station->id);

        return response()->json([
            'status' => true,
            'weatherValues' => $weatherValues
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Station $station, StoreWeatherValueRequest $request)
    {
        $weatherValue = WeatherValue::create(
            [
                'station' => $station->id,
                'variable' => $request->variable,
                'value' => $request->value
            ]
        );

        return response()->json([
            'status' => true,
            'message' => 'Estação cadastrada com sucesso',
            'station' => $weatherValue
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeatherValue  $weatherValue
     * @return \Illuminate\Http\Response
     */
    // public function show(WeatherValue $weatherValue)
    public function show(Station $station, WeatherValue $weatherValue)
    {
        return response()->json([
            'status' => false,
            'message' => 'Método não implementado'
            // 'station' => $weatherValue
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeatherValue  $weatherValue
     * @return \Illuminate\Http\Response
     */
    public function edit(WeatherValue $weatherValue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WeatherValue  $weatherValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WeatherValue $weatherValue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeatherValue  $weatherValue
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeatherValue $weatherValue)
    {
        //
    }
}
