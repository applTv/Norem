<?php
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrganizController;
use App\Http\Controllers\ArtifactsController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\MagicsController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\SupernaturalController;
use App\Http\Controllers\HronoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FavoritesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/categor', function () {
    return view('categor');
});


Route::resource('/hrono', HronoController::class);

Route::get('/dashboard',[FavoritesController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/favorites', [FavoritesController::class, 'show',])->name('favorites.show');


Route::get('/destroy_character/{id}',[FavoritesController::class, 'destroy_character'] )->name('destroy_character');
Route::post('/add_character/{id}',[FavoritesController::class, 'add_character'] )->name('add_character');

Route::get('/destroy_race/{id}',[FavoritesController::class, 'destroy_race'] )->name('destroy_race');
Route::post('/add_race/{id}',[FavoritesController::class, 'add_race'] )->name('add_race');

Route::get('/destroy_organiz/{id}',[FavoritesController::class, 'destroy_organiz'] )->name('destroy_organiz');
Route::post('/add_organiz/{id}',[FavoritesController::class, 'add_organiz'] )->name('add_organiz');



Route::resource('/categor/diseases', DiseaseController::class);
Route::resource('/categor/artifacts', ArtifactsController::class);


Route::resource('/categor/organiz', OrganizController::class);


Route::resource('/categor/races', RaceController::class);
Route::resource('/categor/character', CharacterController::class);
Route::resource('/categor/magic', MagicsController::class);
Route::resource('/categor/planets', PlanetsController::class);
Route::resource('/categor/supernaturals', SupernaturalController::class,);

Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store', 'edit', 'update', 'destroy']) 
    ->middleware(['auth', 'verified']); 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [RegisteredUserController::class, 'logout'])->name('auth.logout');
});

Route::middleware('admin')->group(function(){


});

require __DIR__.'/auth.php';
