@extends('layouts.menu')

@section('content')
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="">
    function actualizarGrafica() {
    /**/
    var Nombre = 0;
    /*$.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{ { route('ActualizaGrafica') }}",
            type:"post",
            data: {Nombre:Nombre},
            success: function(result){*/
              //console.log(result);
              var idR = 1;//$('#rol').val();

              if(idR==1 || idR==2){
                $iniciado3 = 1;
                $iniciado4 = 0;
                $iniciado5 = 0;
                $iniciado6 = 0;
                $iniciado7= 0;
                $iniciado8= 0;
                $iniciado9= 0;
                $iniciado10 =0;


              dibujarGrafico($iniciado3,$iniciado4,$iniciado5,$iniciado6,$iniciado7,$iniciado8,$iniciado9,$iniciado10)

              }else{
              $iniciado = 0;


              }

            /*}
        });*/



    // validarCasillaAsig();


  }
    google.load("visualization", "1", {packages:["corechart"]});
   google.setOnLoadCallback(dibujarGrafico);

   function dibujarGrafico(i3,i4,i5,i6,i7,i8,i9,i10) {
     // Tabla de datos: valores y etiquetas de la gráfica
    var iniciado3 = parseInt(i3);
    var iniciado4 = parseInt(i4);
    var iniciado5 = parseInt(i5);
    var iniciado6 = parseInt(i6);
    var iniciado7 = parseInt(i7);
    var iniciado8 = parseInt(i8);
    var iniciado9 = parseInt(i9);
    var iniciado10 = parseInt(i10);



      var data = google.visualization.arrayToDataTable([
        ['Avance:','Afiliados'],
          ['Cañada',1],
          ['Costa', 0],
          ['Istmo', 0],
          ['Mixteca',2],
          ['Papaloapan',1],
          ['Sierra Sur',2],
          ['Sierra Norte',0],
          ['Valles Centrales',8],
          ['Meta (500,000)',0]


       ]);
     var options = {
       title: 'Afiliados por región',
       is3D: true,
     }
     // Dibujar el gráfico
     new google.visualization.ColumnChart(
     //ColumnChart sería el tipo de gráfico a dibujar
       document.getElementById('GraficoGoogleChart-ejemplo-2')
     ).draw(data, options);
      var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
      var f=new Date();
      document.getElementById("date").innerHTML = f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
   }

</script>
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><div align="center">FUNDACIÓN EUFROSINA CRUZ</div></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex-center position-ref full-height" style="background-color: ; ">
                        <div class="content">
                            <div align="center">
                              <b><h8 id="date"></h8></b>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div align="center">
                <div>
                    <div id="GraficoGoogleChart-ejemplo-2"></div>
                </div>
                <!--<img src="{ {asset('img/libro.jpg')}}" align="center" height="50%" width="50%" class="responsive"/>-->
            </div>
        </div>
    </div>
</div>
@endsection
