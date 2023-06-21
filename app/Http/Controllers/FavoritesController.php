<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CharacterController;
use App\Models\Character;
use App\Models\User;
use App\Models\Race;
use App\Models\Organiz;
use App\Models\Favorites;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
     public function index()
    {
        
        return view('dashboard' );
    }
    public function add_character(Request $request ,$id){

        if(Auth::id())
        {
            $user=auth()->user();
            $character = character::find($id);
            $favorites = new Favorites;

                $favorites->name=$user->name ?? NULL;
                $favorites->character_name =$character->character_name ?? NULL;
                $favorites->character_id =$character->id ?? NULL;
                $favorites->race_name =$race->race_name ?? NULL;
                $favorites->race_id =$race->id ?? NULL;
                $favorites->Organiz_name =$favorites->Organiz_name ?? NULL;
                $favorites->Organiz_id =$Organiz->id ?? NULL;
                $favorites->save();
            
            return redirect()->back()->with('message','Персонаж добавлен в избранные');

        } else{
            return redirect('login');
        }
     }
     public function add_race(Request $request ,$id){

        if(Auth::id())
        {
            $user=auth()->user();
            $race = race::find($id);
            $favorites = new Favorites;

            $favorites->name=$user->name;
            $favorites->race_name =$race->race_name ?? NULL;
            $favorites->race_id =$race->id ?? NULL;
            $favorites->character_name =$favorites->character_name ?? NULL;
            $favorites->character_id =$favorites->id ?? NULL;
            $favorites->Organiz_name =$favorites->Organiz_name ?? NULL;
            $favorites->Organiz_id =$Organiz->id ?? NULL;
            $favorites->save();

            return redirect()->back()->with('message','Раса добавлена в избранные');

        } else{
            return redirect('login');
        }
     }
     public function add_organiz(Request $request ,$id){

        if(Auth::id())
        {
            $user=auth()->user();
            $organiz = Organiz::find($id);
            $favorites = new Favorites;
            $favorites->name=$user->name ;
            $favorites->race_name =$favorites->race_name ?? NULL;
            $favorites->race_id =$favorites->id ?? NULL;
            $favorites->character_name =$favorites->character_name ?? NULL;
            $favorites->character_id =$favorites->id ?? NULL;
            $favorites->Organiz_name =$organiz->Organiz_name ?? NULL;
            $favorites->Organiz_id =$organiz->id ?? NULL;
            $favorites->save();

            return redirect()->back()->with('message','Организация добавлена в избранные');
        } else{
            return redirect('login');
        }
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user=auth()->user();
        $character = new character;
        $character = character::find('character_name');

        $races = new race;
        $races = character::find('race_name');

        $organizs = new character;
        $organizs = character::find('character_name');


        $favorites = favorites::where('name', $user->name)->whereNotNull('character_name')->get();
        $races = favorites::where('name', $user->name)->whereNotNull('race_name')->get();
        $organizs = favorites::where('name', $user->name)->whereNotNull('Organiz_name')->get();

        return view('favorites',['favorites' => $favorites, 'character' => $character, 'races' => $races, 'organizs' => $organizs]);
    }

    public function destroy_character($id)
    {
        $data= favorites::find($id);
        $data->delete();

        return redirect()->back()->with('message','Элемент удален из избранных');
    }
    public function destroy_race($id)
    {
        $data= favorites::find($id);
        $data->delete();

        return redirect()->back()->with('message','Элемент удален из избранных');
    }
    public function organiz_character($id)
    {
        $data= favorites::find($id);
        $data->delete();

        return redirect()->back()->with('message','Элемент удален из избранных');
    }

}
