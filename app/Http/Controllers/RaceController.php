<?php

namespace App\Http\Controllers;



use App\Models\Race;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RaceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = new race;
        return view('categor.races.index', [ 'races' => $races->orderBy('race_name')->orderBy('id','ASC')->paginate(14)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.races.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Race $race)
    {
        
        $race = new Race;
        $race->race_name = $request->input('race_name');
        $race->description = $request->input('description');
        $race->race_life = $request->input('race_life');
        $race->magic = $request->input('magic');
        $race->motherland = $request->input('motherland');
        $race->religion = $request->input('religion');
        $race->family = $request->input('family');
        $race->core = $request->input('core');
        $race->weaknesses = $request->input('weaknesses');
        $race->enemies = $request->input('enemies');
        $race->addition = $request->input('addition');

        if ($request->hasFile('images1')) {

            $file = $request->file('images1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images1 = $filename ?? null;
        }
        if ($request->hasFile('images2')) {
            $file = $request->file('images2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images2 = $filename ?? null;
        }
        if ($request->hasFile('images3')) {
            $file = $request->file('images3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images3 = $filename ?? null;
        }
        if ($request->hasFile('images4')) {
            $file = $request->file('images4');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images4 = $filename ?? null;
        }
        
        $race->save();
        return redirect('/categor/races');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rase  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $race = new race;
        return view('categor.races.show', [ 'race' => $race->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Race $race)
    {
        return view('categor.races.edit', [ 'race' => $race]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Race $race)
    {
        $race->race_name = $request-> race_name;
        $race->description = $request-> description;
        $race->race_life = $request-> race_life;
        $race->magic = $request->magic;
        $race->motherland = $request->motherland;
        $race->religion = $request->religion;
        $race->family = $request->family;
        $race->core = $request->core;
        $race->weaknesses = $request->weaknesses;
        $race->enemies = $request->enemies;
        $race->addition = $request->addition;
        if ($request->hasFile('images1')) {

            $file = $request->file('images1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images1 = $filename ?? null;
        }
        if ($request->hasFile('images2')) {
            $file = $request->file('images2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images2 = $filename ?? null;
        }
        if ($request->hasFile('images3')) {
            $file = $request->file('images3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images3 = $filename ?? null;
        }
        if ($request->hasFile('images4')) {
            $file = $request->file('images4');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/race/', $filename);
            $race->images4 = $filename ?? null;
        }
        
        $race->save();
        return redirect()->route('races.show',['race' => $race]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        
        $race->delete();
        return redirect('/categor/races');
    }
}
