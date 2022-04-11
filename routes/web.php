<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('general', function () {return view('PanoramaEstatal/general');})->name('general');
Route::get('costa', function () {return view('PanoramaEstatal/costa');})->name('costa');
Route::get('cañada', function () {return view('PanoramaEstatal/cañada');})->name('cañada');
Route::get('cuenca_papaloapan', function () {return view('PanoramaEstatal/cuenca_papaloapan');})->name('cuenca_papaloapan');
Route::get('istmo', function () {return view('PanoramaEstatal/istmo');})->name('istmo');
Route::get('mixteca', function () {return view('PanoramaEstatal/mixteca');})->name('mixteca');
Route::get('sierra_sur', function () {return view('PanoramaEstatal/sierra_sur');})->name('sierra_sur');
Route::get('sierra_norte', function () {return view('PanoramaEstatal/sierra_norte');})->name('sierra_norte');
Route::get('valles_centrales', function () {return view('PanoramaEstatal/valles_centrales');})->name('valles_centrales');
Route::get('registroAM', function () {return view('apoyoMujeres/registro');})->name('registroAM');
Route::get('listadoAM', function () {return view('apoyoMujeres/listado');})->name('listadoAM');
Route::get('listadoBecas', function () {return view('becas/listado');})->name('listadoBecas');
Route::get('registroBecas', function () {return view('becas/registro');})->name('registroBecas');
Route::get('listadoPS', function () {return view('programasSoc/listado');})->name('listadoPS');
Route::get('registroPS', function () {return view('programasSoc/registro');})->name('registroPS');
Route::get('libros_panel', function () {return view('LibrosINJEO/libros_index');})->name('libros_panel');


