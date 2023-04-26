<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['habitaciones'] = Habitacion::All();
        return view('habitaciones.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('habitaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $habitacionesData = request()->except('_token');
        Habitacion::insert($habitacionesData);
        return redirect()->route('habitaciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $habitacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $habitacion)
    {
        //
        $habitaciones = Habitacion::findOrFail($habitacion);
        return view('habitaciones.edit', compact('habitaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $habitacion)
    {
        //
        $habitacionesData = request()->except('_token', '_method');
        Habitacion::where('id', '=', $habitacion)->update($habitacionesData);
        return redirect('habitaciones');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $habitacion)
    {
        //
        Habitacion::destroy($habitacion);
        return redirect('habitaciones');
    }
}