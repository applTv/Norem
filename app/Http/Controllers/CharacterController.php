<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Organiz;
use App\Models\Race;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = new character;
        return view('categor.character.index', [ 'characters' => $characters->orderBy('character_name')->orderBy('id','ASC')->paginate(14)]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categor.character.create',['organizs'=>Organiz::orderBy('organiz_name')->orderBy('id','ASC')->get(),'races'=>Race::orderBy('race_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $character = new character;
        $character->character_name = $request->input('character_name');
        $character->age = $request->input('age');
        $character->race_name = $request->input('race_name');
        $character->height = $request->input('height');
        $character->gender_name = $request->input('gender_name');
        $character->Organiz_name = $request->input('Organiz_name');
        $character->status_name = $request->input('status_name');
        $character->inform = $request->input('inform');
        $character->bio = $request->input('bio');
        $character->magic = $request->input('magic');
        $character->add = $request->input('add');
        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/characters/', $filename);
            $character->images = $filename ?? null;
        }
        
        $character->save();
        return redirect('/categor/character');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = new character;
        return view('categor.character.show', [ 'character' => $character->find($id),'organizs'=>Organiz::all(),'races'=>Race::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(character $character)
    {
        return view('categor.character.edit',['character'=> $character ,'organizs'=>Organiz::orderBy('organiz_name')->orderBy('id','ASC')->get(),'races'=>Race::orderBy('race_name')->orderBy('id','ASC')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, character $character)
    {
        $character->character_name = $request-> character_name;
        $character->age = $request-> age;
        $character->race_name = $request->race_name;
        $character->height = $request->height;
        $character->gender_name = $request->gender_name;
        $character->Organiz_name = $request->Organiz_name;
        $character->status_name = $request->status_name;
        $character->inform = $request->inform;
        $character->bio = $request->bio;
        $character->magic = $request->magic;
        $character->add = $request->add;
        if ($request->hasFile('images')) {

            $file = $request->file('images');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/characters/', $filename);
            $character->images = $filename ?? null;
        }
        
        $character->save();
        return redirect()->route('character.show',['character' => $character]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\character  $cha
     * @return \Illuminate\Http\Response
     */
    public function destroy(character $character)
    {
        
        $character->delete();
        return redirect('/categor/character');
    }
}
