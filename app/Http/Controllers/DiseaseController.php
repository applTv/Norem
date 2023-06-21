<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = new disease;
        return view('categor.diseases.index', [ 'diseases' => $diseases->orderBy('disease_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diseases = new Disease;
        $diseases = Disease::create([
                    'disease_name' => $request-> disease_name,
                    'symptoms' => $request-> symptoms,
                    'mortality' => $request-> mortality,
                    'description' => $request-> description,
                    'diseases_add' => $request-> diseases_add,
    ]);
        return redirect('/categor/diseases');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $disease = new disease;
        return view('categor.diseases.show', [ 'disease' => $disease->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Disease $disease)
    {
        return view('categor.diseases.edit', ['disease'=>$disease]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disease $disease)
    {
        $disease->disease_name = $request-> disease_name;
        $disease->disease_name = $request-> disease_name;
        $disease->symptoms = $request-> symptoms;
        $disease->mortality = $request-> mortality;
        $disease->description = $request-> description;
        $disease->diseases_add = $request-> diseases_add;
        $disease->save();
        return redirect()->route('diseases.show',['disease' => $disease]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disease $disease)
    {
        $disease->delete();
        return redirect('/categor/diseases');
    }
}
