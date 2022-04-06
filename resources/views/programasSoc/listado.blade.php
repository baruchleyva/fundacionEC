@extends('layouts.menu')

@section('content')
<script type="text/javascript" class="init">
    $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange: false,
            responsive: true,
            language: {
                "emptyTable": "No hay datos disponibles",
                        "search": "Buscar:",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                        "infoEmpty": "Mostrando 0 de 0 Entradas",
            },

        });


    });

    </script>

<div class="container">
    <div class="">
        <div class="">
            <br>
            <div align="center">
                 <h1>Programas Sociales - Listado</h1> 
            </div>
            <br>
            <div class="table-responsive col-md-12 order-md-1">
                <table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" aria-describedby="example_info" role="grid" style="width: 100%; ">
                    <thead style="text-align: center;" class="thead-dark" id="panel">
                        <tr>
                            <th style="text-align: center; font-size: 12px;" WIDTH="3%">Nombre</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="10%">Estado</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="15%">Municipio</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="5%">Localidad</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="5%">Direccion</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="5%">CP</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="5%">Correo Electronico</th>
                            <th style="text-align: center; font-size: 12px;" WIDTH="5%">Telefono</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr>
                            
                            <td align="center">Tania Ramírez Canseco</td>
                            <td align="center">Oaxaca</td>
                            <td align="center">San Bartolo Yautepec</td>
                            <td align="center">Puerto San Bartolo</td>
                            <td align="center">Carretera a San Bartolo Sin número</td>  
                            <td style="text-align: center; font-size: 12px;">21897</td>  
                            <td align="center">Tania378@gmail.com</td>
                            <td style="text-align: center; font-size: 12px;">9538907651</td>
                           

                            
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection