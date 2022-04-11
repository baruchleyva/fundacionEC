@extends('layouts.menu')
@section('content')

<script type="text/javascript">
function ejecutarAccion(valor){
  var opcionE = confirm("¿Esta seguro que desea guardar los datos?");
  var idP = $('select[name="promotor"] option:selected').val();
  $('#idpro').val(idP);
  var op=valor;
  $('#opcion').val(op);


  if (opcionE == true) { 
    document.forms["formulario"].submit();
  }
}

function check(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function traerSecciones(id){
 var idP=id.value;
 console.log(idP);
 $('#ingresarSeccion').val(idP);
 
$.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ route('traerSeccionesPromotor') }}",
        type:"post",
        async:false,
        data: {idP:idP},
        success: function(result){
          //alert('respuesta'+result.id_socio);
          console.log(result);
          $('#sec').html('');

          var valores='';
          var totalfic=result.length;
         valores ="<select id='promotor' name='promotor' class='form-control'>";
            for (var j = 0; j < totalfic; j++) {
                valores += "<option value='"+result[j].id_promotor+"'>"+result[j].nombre+"</option>";

            }
            valores += "</select>";
          
          $('#sec').html(valores);
        }
      });


}

function otraSeccion(){

 if(document.getElementById('checkIngresarSeccion').checked==true){
  $('#ingresarSeccion').val('');
document.getElementById('ingresarSeccion').hidden = false;
document.getElementById('seccion').disabled = true;
document.getElementById('promotor').disabled = true;
 }else{
  document.getElementById('ingresarSeccion').hidden = true;
 document.getElementById('seccion').disabled = false;
 }
}


function checkletra(e) {
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla == 8 || tecla==32) {
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros y letras
    patron = /[A-Za-z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
<main role="main" class="">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">
          
          <a href="#" title="Ir al Panel de Ciudadanos">
            <img style="" src="{{asset('img/user.png')}}" alt="Panel" border=0 height="50px" width="50px"/>
          </a>&nbsp;Programas Sociales - Registro
        </h1>  
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{route('listadoAM')}}">
              <button type="button" class="btn btn-sm btn-outline-info">Listado</button>
            </a>
          </div>
        </div>
      </div>

     <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Captura de Afiliado</h4>
           <div id="msjGuardar">
            <table>
              <tr>
              
              </tr>
              <td><h5 class="mb-3">Datos</h5></td>
            </table>
          </div>
          <form class="needs-validation" action="#" name="formulario" method="post">
            @csrf
            <div class="row">
              <div class="table-responsive col-md-4 mb-3">Sección
                <label>:</label>
                
                  <select class="form-control" id="seccion" name="seccion" onchange="traerSecciones(this)">
                <option value="" id="sin" >Sin seccion</option>
                
                @foreach($secciones as $seccion)
                <option value="{{$seccion['seccion']}}">{{$seccion['seccion']}}</option>
                @endforeach
              </select>
                <br>
                
              
              
            </div>
             <div class="table-responsive col-md-8 mb-2">Responsable
                <label>:</label>
                <div id="sec" name="sec">
              <select class="form-control" id="promotor" name="promotor" disabled>
                <option value="" selected hidden disabled>Seleccione..</option>

                @foreach($listaDatos as $datosPromotor)
                <option value="{{$datosPromotor['id_promotor']}}">{{$datosPromotor['nombre']}}</option>
                @endforeach
              </select>
              
            </div>
            <input type="hidden" name="idpro" id="idpro">

            
           </div>
         </div>

            <br>
              
            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="nombre">Nombre(s)</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" value="" autocomplete="off" onkeypress="return checkletra(event)" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="apellidop">Apellido Paterno</label>
                <input type="text" class="form-control" name="apellidop" id="apellidop" placeholder="" value="" autocomplete="off" onkeypress="return checkletra(event)" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <label for="apellidom">Apellido Materno</label>
                <input type="text" class="form-control" name="apellidom" id="apellidom" placeholder="" value="" autocomplete="off" onkeypress="return checkletra(event)" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="ine">Clave Electoral (INE)</label>
                <input type="text" maxlength="18" class="form-control" name="ine" id="ine" placeholder="" autocomplete="off" value="" onkeypress="return check(event)" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
              <div class="col-md-8 mb-3">
                <label for="colonia">Colonia</label>
                <input type="text" class="form-control" name="colonia" id="colonia" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
            </div>

            <div class="row">
               <div class="col-md-4 mb-3">
                <label for="calle">Calle(Lote, Mzna, otro)</label>
                <input type="text" class="form-control" name="calle" id="calle" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <label for="numext">Numero Exterior</label>
                <input type="text" class="form-control" name="numext" id="numext" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="numint">Numero Interior</label>
                <input type="text" class="form-control" name="numint" id="numint" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>     
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="cp">Codigo Postal</label>
                <input type="text" class="form-control" name="cp" id="cp" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <label for="muni">Municipio</label>
                <select class="form-control" id="muni" name="muni">
                <option value="" id="sin" selected hidden disabled>Seleccione..</option>
                
                @foreach($municipios as $dato)
                <option value="{{$dato['municipio']}}">{{$dato['municipio']}}</option>
                @endforeach
              </select>
              </div>
              <div class="col-md-4 mb-3">
              Región
                <label>:</label>
              <select class="form-control" id="region" name="region">
                <option value="1">CAÑADA</option>
                <option value="2">COSTA</option>
                <option value="3">ISTMO</option>
                <option value="4">MIXTECA</option>
                <option value="5">PAPALOAPAN</option>
                <option value="6">SIERRA SUR</option>
                <option value="7">SIERRA NORTE</option>
                <option value="8">VALLES CENTRALES</option>
              </select>
            </div>
           </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="cp">Codigo Postal</label>
                <input type="text" class="form-control" name="cp" id="cp" autocomplete="off" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
               <div class="col-md-4 mb-3">
                <label for="telcelular">Telefono celular</label>
                <input type="number" class="form-control" name="telcelular" id="telcelular" autocomplete="off" placeholder="" value="" maxlength="10" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="telcasa">Telefono Casa</label>
                <input type="number" class="form-control" name="telcasa" id="telcasa" autocomplete="off" placeholder="" value="" maxlength="7" required>
                <div class="invalid-feedback">
                  Rellenar este campo con texto es requerido.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="table-responsive col-md-4 mb-3">Tipo de registro
                <label>:</label>
              <select class="form-control" id="tipo" name="tipo">
                <option value="0">AFILIADO</option>
                <option value="1">OTRO</option>
              </select>
            </div>
               


             
            </div>
            <textarea id="observaciones" name="observaciones" rows="10" cols="50" placeholder="Observaciones"></textarea>
            
            <hr class="mb-2">
            <button type="button" class="btn btn-success btn-lg" onclick="ejecutarAccion('S')" disabled>Guardar y salir</button>
            <input type="hidden" name="opcion" id="opcion"></input>
            <button type="button" class="btn btn-primary btn-lg" onclick="ejecutarAccion('C')" disabled>Guardar y seguir capturando</button>
            <a href="{{route('listadoAM')}}">
              <button type="button"class="btn btn-dark btn-lg">Cancelar</button>
            </a>    
        </form>
    </div>

     </main>
@endsection