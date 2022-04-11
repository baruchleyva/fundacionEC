
@extends("layouts.menu")
@section("content")
<script type="text/javascript">
     $(document).ready(function() {
        var table = $('#example').DataTable({
            lengthChange:true,
            paging:true,
            colReorder: true,
            responsive: true,
            autoWidth:false,
            ordering: true,
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
                        "lengthMenu": "Mostrar _MENU_ registros",
                },

        });




    });
</script>
    <div class="row">
        <div class="col-12">
            <h1>
                <br>
                Libros de jovenes libros evento INJEO <i class='fas fa-book-open'></i></h1>

                <!--<div class="row">
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Filtrar</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" disabled>
                                <option selected hidden>Selecciona una opción</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                          </select>
                        </div>
                    </div>-->
                    <div class="col-12" align="right" >
                        <button type="button" class="btn btn-success mb-2" disabled>Agregar</button>
                        <!--<a href="#" class="btn btn-success mb-2" disabled>Agregar</a>-->
                    </div>
                <!--</div>-->




            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" >
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Número</th>
                        <th>Descripción</th>
                        <th>Región</th>
                        <th>Libros</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laura</td>
                            <td>9513944030</td>
                            <td>Joven artesana San Antonino Castillo Velasco</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Moncerrat</td>
                            <td>9511968306</td>
                            <td>Joven artesana San Antonino Castillo Velasco</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Aleída Ruiz</td>
                            <td>9513195076</td>
                            <td>Premio Nacional de la Juventud 2020 - 2021</td>
                            <td>Valles Centrales</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Erika Jasmín </td>
                            <td>9511912642</td>
                            <td>Premio Estatal de la Juventud</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Fredy Samuel</td>
                            <td>2871671202</td>
                            <td>Premio Estatal de la Juventud</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Elisa Reyes</td>
                            <td>9512423010</td>
                            <td>Artesana de hojalata</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Alma Herrera</td>
                            <td>9512422492</td>
                            <td>Contacto de lo dio la jefa</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Miguel Ibañes Huajuapan</td>
                            <td>9531432694</td>
                            <td>Contacto me lo dio la jefa se esta coordinandom evento para presentar el libro en Huajuapan</td>
                            <td>Mixteca</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Luisa Griselda Jiménez Osorio</td>
                            <td>9512688760</td>
                            <td>Diputada dio el contacto es de Coatlán</td>
                            <td>Sierra Sur</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Roberto Carlos Martínez</td>
                            <td>9512823065</td>
                            <td>Secretario municipal San Pablo Coatlán</td>
                            <td>Sierra Sur</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Jesús Lazo</td>
                            <td>2871639942</td>
                            <td>Jalapa de Díaz, se puede enviar por autobus</td>
                            <td>Papaloapan</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Teresa Sanchez Hernandez</td>
                            <td>9516462991</td>
                            <td>Diputada dio contacto, (Sanchez Chavos)</td>
                            <td>Valles Centrales</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Luis Alberto</td>
                            <td>9531548811</td>
                            <td>Director INJUVE Huajuapan</td>
                            <td>Mixteca</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Fermina Ramirez Rosalez</td>
                            <td>5531982380</td>
                            <td>Diputada dio el contacto, San Juan Zautla, municipio de San Pedro Sochiapam, Distrito de Cuitlan</td>
                            <td>Cañada</td>
                            <td>1</td>
                        </tr>
                    <!--@ foreach($productos as $producto)
                        <tr>
                            <td>{ {$producto->codigo_barras}}</td>
                            <td>{ {$producto->descripcion}}</td>
                            <td>${ {$producto->precio_compra}}</td>
                            <td>${ {$producto->precio_venta}}</td>
                            <td>${ {number_format($producto->precio_venta - $producto->precio_compra,2)}}</td>
                            <td>{ {number_format($producto->existencia,0)}}</td>
                            <td>
                                <a class="btn btn-warning" href="{ {route("productos.edit",[$producto])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{ {route("productos.destroy", [$producto])}}" method="post">
                                    @ method("delete")
                                    @ csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @ endforeach-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
