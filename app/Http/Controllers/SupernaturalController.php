<?php

namespace App\Http\Controllers;

use App\Models\Supernatural;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SupernaturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supernaturals = new supernatural;
        return view('categor.supernaturals.index', [ 'supernaturals' => $supernaturals->orderBy('supernatural_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.supernaturals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supernatural = new supernatural;
        $supernatural = supernatural::create([
                    'supernatural_name' => $request-> supernatural_name,
                    'content' => $request-> content,
                    'supernatural_add' => $request-> supernatural_add,
    ]);
        return redirect('/categor/supernaturals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $supernatural = new supernatural;
        return view('categor.supernaturals.show', [ 'supernatural' => $supernatural->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\supernatural  $supernatural
     * @return \Illuminate\Http\Response
     */
    public function edit(supernatural $supernatural)
    {
        return view('categor.supernaturals.edit', ['supernatural'=>$supernatural]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\supernatural  $supernatural
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, supernatural $supernatural)
    {
        $supernatural->supernatural_name = $request-> supernatural_name;
        $supernatural->content = $request-> content;
        $supernatural->supernatural_add = $request-> supernatural_add;
        $supernatural->save();
        return redirect()->route('supernaturals.show',['supernatural' => $supernatural]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\supernatural  $supernatural
     * @return \Illuminate\Http\Response
     */
    public function destroy(supernatural $supernatural)
    {
        $supernatural->delete();
        return redirect('/categor/supernaturals');
    }
}
