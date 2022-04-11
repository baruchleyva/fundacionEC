<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ApoyoMujeresController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function registroAM()
    {
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
        return view('apoyoMujeres/registro', compact('listaDatos','secciones','municipios','msj'));
    }

    public function traerSeccionesPromotor(Request $request){

    if($request->ajax()){
        $idPromo=$request->input('idP');

         $query2 = "SELECT p.id ID_PROMOTOR,s.seccion SECCION, p.nombres NOMBRES,p.apellido_paterno APELLIDO_PATERNO, p.apellido_materno APELLIDO_MATERNO FROM promotores p
            LEFT JOIN secciones s
            on p.id=s.id_promotor
            WHERE SECCION=$idPromo";
            $resultadoQry2 = DB::SELECT( $query2 );
            $datosP = [];
            if(count($resultadoQry2) >0){
                foreach ($resultadoQry2 as $datos ) {
                    $fila = $datos;
                    $id_promotor = $fila->ID_PROMOTOR;
                    $nombres = strtoupper($fila->NOMBRES) ;
                    $ap = strtoupper($fila->APELLIDO_PATERNO);
                    $am = strtoupper($fila->APELLIDO_MATERNO);
                    $seccion = $fila->SECCION;

                     $nombre_completo=$nombres." ".$ap." ".$am;

                    array_push( $datosP, [
                        'id_promotor'=> $id_promotor,
                        'nombre'=> $nombre_completo,
                        'seccion'=> $seccion,
                    ] );
                    }
            }else{
                $nombre_completo="SIN RESPONSABLE";
                array_push( $datosP, [
                        'id_promotor'=> 0,
                        'nombre'=> $nombre_completo,
                        'seccion'=> 0,
                    ] );
            }



            return $datosP;
    }




}

   
}
