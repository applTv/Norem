<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Organiz;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrganizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizs = new organiz;
        return view('categor.organiz.index', [ 'organizs' => 
        $organizs->orderBy('Organiz_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.organiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organiz = new organiz;
        $organiz->Organiz_name = $request->input('Organiz_name');
        $organiz->content = $request->input('content');

        if ($request->hasFile('images1')) {

            $file = $request->file('images1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images1 = $filename ?? null;
        }
        if ($request->hasFile('images2')) {
            $file = $request->file('images2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images2 = $filename ?? null;
        }
        if ($request->hasFile('images3')) {
            $file = $request->file('images3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images3 = $filename ?? null;
        }
        if ($request->hasFile('images4')) {
            $file = $request->file('images4');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images4 = $filename ?? null;
        }
        
        $organiz->save();
        return redirect('/categor/organiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        $characters = new character;
        
        $organiz = new organiz;
        // $characters= DB::table('characters')
        // ->join('characters','Organiz_name','=','characters.Organiz_name')
        // ->join('Organiz','Organiz_name','=','Organiz.Organiz_name')
        // ->select('characters_name*')->get();
        // characters()->orderBy('Organiz_name')->get();
        // $characters = organiz::where('Organiz_name')->characters;
        return view('categor.organiz.show', [ 'organiz' => $organiz->find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Organiz $organiz)
    {
        return view('categor.organiz.edit', [ 'organiz' => $organiz]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organiz $organiz)
    {
        $organiz->Organiz_name = $request-> Organiz_name;
        $organiz->content = $request-> content;
        if ($request->hasFile('images1')) {

            $file = $request->file('images1');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images1 = $filename ?? null;
        }
        if ($request->hasFile('images2')) {
            $file = $request->file('images2');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images2 = $filename ?? null;
        }
        if ($request->hasFile('images3')) {
            $file = $request->file('images3');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images3 = $filename ?? null;
        }
        if ($request->hasFile('images4')) {
            $file = $request->file('images4');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/organiz/', $filename);
            $organiz->images4 = $filename ?? null;
        }
        
        $organiz->save();
        return redirect()->route('organiz.show',['organiz' => $organiz]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organiz  $organiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organiz $organiz)
    {
        $organiz->delete();
        return redirect('/categor/organiz');
    }
}
