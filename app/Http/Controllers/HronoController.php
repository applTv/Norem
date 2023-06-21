<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Hrono;


class HronoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hronos = new hrono;
        
        return view('hrono.index',['hronos'=>$hronos->orderBy('year_event','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($hronos);
        return view('hrono.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hrono = new hrono;
        $hrono = hrono::create([
                    'title' => $request-> title,
                    'name' => $request-> name,
                    'year_event' => $request-> year_event,
    ]);
        return redirect('/hrono');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(hrono $hrono)
    {
        return view('hrono.edit', ['hrono'=>$hrono]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hrono $hrono)
    {
        $hrono->title = $request-> title;
        $hrono->name = $request-> name;
        $hrono->year_event = $request-> year_event;
        $hrono->save();
        return redirect()->route('hrono.index',['hrono' => $hrono]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(hrono $hrono)
    {
        $hrono->delete();
        return redirect('/hrono');
    }
}