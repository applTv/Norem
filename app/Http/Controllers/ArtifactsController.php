<?php

namespace App\Http\Controllers;


use App\Models\Artifacts;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtifactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artifacts = new artifacts;
        return view('categor.artifacts.index', [ 'artifacts' => $artifacts->orderBy('artifacts_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.artifacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artifacts = new artifacts;
        $artifacts = artifacts::create([
                    'artifacts_name' => $request-> artifacts_name,
                    'origin' => $request-> origin,
                    'type' => $request-> type,
                    'form' => $request-> form,
                    'principles' => $request-> principles,
                    'capabilities' => $request-> capabilities,
                    'conditions' => $request-> conditions,
                    'diapason' => $request-> diapason,
                    'power' => $request-> power,
                    'stock' => $request-> stock,
                    'duration' => $request-> duration,
                    'character_name' => $request-> character_name,
                    'characteristics' => $request-> characteristics,
    ]);
        return redirect('/categor/artifacts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $artifact = new artifacts;
        return view('categor.artifacts.show', [ 'artifact' => $artifact->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function edit(artifacts $artifact)
    {
        return view('categor.artifacts.edit', ['artifact'=>$artifact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artifacts $artifact)
    {
        $artifact->artifacts_name = $request-> artifacts_name;
        $artifact->origin = $request-> origin;
        $artifact->type = $request-> type;
        $artifact->form = $request-> form;
        $artifact->principles = $request-> principles;
        $artifact->capabilities = $request-> capabilities;
        $artifact->conditions = $request-> conditions;
        $artifact->diapason = $request-> diapason;
        $artifact->power = $request-> power;
        $artifact->stock = $request-> stock;
        $artifact->duration = $request-> duration;
        $artifact->character_name = $request-> character_name;
        $artifact->characteristics = $request-> characteristics;
        $artifact->save();
        return redirect()->route('artifacts.show',['artifact' => $artifact]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(artifacts $artifact)
    {
        $artifact->delete();
        return redirect('/categor/artifacts');
    }
}
