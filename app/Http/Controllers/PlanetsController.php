<?php

namespace App\Http\Controllers;

use App\Models\Planet;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlanetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planets = new Planet;
        return view('categor.planets.index', [ 'planets' => $planets->orderBy('planets_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.planets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $planet = new planet;
        $planet->planets_name = $request->input('planets_name');
        $planet->climate = $request->input('climate');
        $planet->description = $request->input('description');
        $planet->population = $request->input('population');
        $planet->time = $request->input('time');
        if ($request->hasFile('images')) {
                $file = $request->file('images');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('images/planet/', $filename);
                $planet->images = $filename ?? null;
            }
        $planet->save();
        return redirect('/categor/planets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $planet = new planet;
        return view('categor.planets.show', [ 'planet' => $planet->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\planet  $planet
     * @return \Illuminate\Http\Response
     */
    public function edit(planet $planet)
    {
        return view('categor.planets.edit', ['planet'=>$planet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\planet  $planet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, planet $planet)
    {
        $planet->planets_name = $request-> planets_name;
        $planet->climate = $request-> climate;
        $planet->description = $request-> description;
        $planet->population = $request-> population;
        $planet->time = $request-> time;
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/planet/', $filename);
            $planet->images = $filename ?? null;
        }
        $planet->save();
        return redirect()->route('planets.show',['planet' => $planet]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\planet  $planet
     * @return \Illuminate\Http\Response
     */
    public function destroy(planet $planet)
    {
        $planet->delete();
        return redirect('/categor/planets');
    }
}
