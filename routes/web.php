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
Route::get('/registroAM', [App\Http\Controllers\ApoyoMujeresController::class, 'registroAM'])->name('registroAM');
Route::post('/traerSeccionesPromotor', [App\Http\Controllers\ApoyoMujeresController::class, 'traerSeccionesPromotor'])->name('traerSeccionesPromotor');
Route::get('listadoAM', function () {return view('apoyoMujeres/listado');})->name('listadoAM');
Route::get('listadoBecas', function () {return view('becas/listado');})->name('listadoBecas');
Route::get('registroBecas', function () {

  $query = "SELECT p.id ID_PROMOTOR, p.nombres NOMBRES,p.apellido_paterno APELLIDO_PATERNO, p.apellido_materno APELLIDO_MATERNO FROM promotores p";
            $resultadoQry = DB::SELECT( $query );
            $listaDatos = [];
            foreach ($resultadoQry as $datos ) {
                    $fila = $datos;
                    $id_promotor = $fila->ID_PROMOTOR;
                    $nombres = strtoupper($fila->NOMBRES) ;
                    $ap = strtoupper($fila->APELLIDO_PATERNO);
                    $am = strtoupper($fila->APELLIDO_MATERNO);

                    $nombre_completo= $nombres." ".$ap." ".$am;
                    array_push( $listaDatos, [
                        'id_promotor'=> $id_promotor,
                        'nombre'=> $nombre_completo,
                    ] );
            }


            $query_seccion = "SELECT s.id ID_SECCION,s.seccion SECCION FROM secciones s";
            $resultadoQry = DB::SELECT( $query_seccion );
            $secciones = [];
            foreach ($resultadoQry as $datos ) {
                    $fila = $datos;
                    $id_seccion = $fila->ID_SECCION;
                    $s= $fila->SECCION;
                    array_push( $secciones, [
                        'id_seccion'=> $id_seccion,
                        'seccion'=> $s,

                    ] );
            }

              $query_muni = "SELECT DISTINCT cd.municipio FROM codigosdireccion cd WHERE cd.estado='Oaxaca' ORDER BY cd.municipio asc";
            $resultadoQrym = DB::SELECT( $query_muni );
            $municipios = [];
            foreach ($resultadoQrym as $datos ) {
                    $fila = $datos;
                    $municipio = $fila->municipio;
                    
                    array_push( $municipios, [
                        'municipio'=> $municipio,
                        

                    ] );
            }



            
            $msj="";


            return view('becas/registro',compact('listaDatos','secciones','municipios','msj'));})->name('registroBecas');
Route::get('listadoPS', function () {return view('programasSoc/listado');})->name('listadoPS');
Route::get('registroPS', function () {

          $query = "SELECT p.id ID_PROMOTOR, p.nombres NOMBRES,p.apellido_paterno APELLIDO_PATERNO, p.apellido_materno APELLIDO_MATERNO FROM promotores p";
            $resultadoQry = DB::SELECT( $query );
            $listaDatos = [];
            foreach ($resultadoQry as $datos ) {
                    $fila = $datos;
                    $id_promotor = $fila->ID_PROMOTOR;
                    $nombres = strtoupper($fila->NOMBRES) ;
                    $ap = strtoupper($fila->APELLIDO_PATERNO);
                    $am = strtoupper($fila->APELLIDO_MATERNO);

                    $nombre_completo= $nombres." ".$ap." ".$am;
                    array_push( $listaDatos, [
                        'id_promotor'=> $id_promotor,
                        'nombre'=> $nombre_completo,
                    ] );
            }


            $query_seccion = "SELECT s.id ID_SECCION,s.seccion SECCION FROM secciones s";
            $resultadoQry = DB::SELECT( $query_seccion );
            $secciones = [];
            foreach ($resultadoQry as $datos ) {
                    $fila = $datos;
                    $id_seccion = $fila->ID_SECCION;
                    $s= $fila->SECCION;
                    array_push( $secciones, [
                        'id_seccion'=> $id_seccion,
                        'seccion'=> $s,

                    ] );
            }

              $query_muni = "SELECT DISTINCT cd.municipio FROM codigosdireccion cd WHERE cd.estado='Oaxaca' ORDER BY cd.municipio asc";
            $resultadoQrym = DB::SELECT( $query_muni );
            $municipios = [];
            foreach ($resultadoQrym as $datos ) {
                    $fila = $datos;
                    $municipio = $fila->municipio;
                    
                    array_push( $municipios, [
                        'municipio'=> $municipio,
                        

                    ] );
            }



            
            $msj="";


	return view('programasSoc/registro',compact('listaDatos','secciones','municipios','msj'));})->name('registroPS');
Route::get('libros_panel', function () {return view('LibrosINJEO/libros_index');})->name('libros_panel');


