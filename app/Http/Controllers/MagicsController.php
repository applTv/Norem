<?php

namespace App\Http\Controllers;

use App\Models\Magic;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MagicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magics = new magic;
        return view('categor.magic.index', [ 'magics' => $magics->orderBy('magic_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.magic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $magic = new magic;
        $magic = magic::create([
                    'magic_name' => $request-> magic_name,
                    'legality' => $request-> legality,
                    'restrictions' => $request-> restrictions,
                    'magic_description' => $request-> magic_description,
                    'add_description' => $request-> add_description,
    ]);
        return redirect('/categor/magic');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $magic = new magic;
        return view('categor.magic.show', [ 'magic' => $magic->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\magic  $magic
     * @return \Illuminate\Http\Response
     */
    public function edit(magic $magic)
    {
        return view('categor.magic.edit', ['magic'=>$magic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\magic  $organiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, magic $magic)
    {
        $magic->magic_name = $request-> magic_name;
        $magic->legality = $request-> legality;
        $magic->restrictions = $request-> restrictions;
        $magic->magic_description = $request-> magic_description;
        $magic->add_description = $request-> add_description;
        $magic->save();
        return redirect()->route('magic.show',['magic' => $magic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\magic  $magic
     * @return \Illuminate\Http\Response
     */
    public function destroy(magic $magic)
    {
        $magic->delete();
        return redirect('/categor/magic');
    }
}
