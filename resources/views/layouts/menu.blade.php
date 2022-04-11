<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{asset('img/libro.jpg')}}"/>
    <title>FUNDACIONEC</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" />

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" style="background-color:#798d24;">
            <div id="dismiss" style="background-color:white;">
                <i class="fas fa-angle-left"></i>
            </div>

            <div class="sidebar-header" style="background-color:white;">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img alt="" border="0" src="{{asset('img/libro1.jpg')}}" width="180" height="45"/>
                </a>
            </div>

            <ul class="list-unstyled components">
                <li>
                   <a href="{{ url('/home') }}">
                    Inicio
                </a>
                </li>
                @if(Auth::user()->ID_ROL_LLAVE_FK == 1)

                    <li>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuCyA" aria-expanded="false" aria-controls="menuCyA" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-venus"></i></div>
                            <B>Apoyo a las Mujeres</B>
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                    </li>
                        <div class="collapse" id="menuCyA" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                <!--<a class="nav-link" href="{ {route('vehicles.index')}}"> Registro</a>-->
                                <a class="nav-link" href="{{route('registroAM')}}"> Registro</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('listadoAM')}}">Listado</a>
                            </nav>
                        </div>


                    <li>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuCyA2" aria-expanded="false" aria-controls="menuCyA" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                            <B>Becas</B>
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                    </li>
                        <div class="collapse" id="menuCyA2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('registroBecas')}}"> Registro</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('listadoBecas')}}">Listado</a>
                            </nav>
                        </div>


                    <li>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuCyA3" aria-expanded="false" aria-controls="menuCyA" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class='fas fa-handshake'></i></div>
                            <B>Programas sociales</B>
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                    </li>
                        <div class="collapse" id="menuCyA3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('registroPS')}}"> Registro</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('listadoPS')}}">Listado</a>
                            </nav>
                        </div>

                    <li>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuCyA4" aria-expanded="false" aria-controls="menuCyA" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                            <B>Panorama estatal</B>
                            <div class="sb-sidenav-collapse-arrow"></div>
                        </a>
                    </li>
                        <div class="collapse" id="menuCyA4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('general')}}"> General</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('cañada')}}">Cañada</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('costa')}}">Costa</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('cuenca_papaloapan')}}">Cuenca del Papaloapan</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('istmo')}}">Istmo</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('valles_centrales')}}">Valles Centrales</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('mixteca')}}">Mixteca</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('sierra_sur')}}">Sierra Sur</a>
                            </nav>
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{route('sierra_norte')}}">Sierra Norte</a>
                            </nav>
                        </div>




                <li>
                    <a href="{{route('libros_panel')}}" style="font-size:15px;">
                    <i class='fas fa-book-open'></i>
                    <b>Libros INJEO</b>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="article">Salir</a>
                </li>
                @endif



            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg" style="background-color:#0E7DB9 ;">
                <div class="container-fluid">
                    <a href="{{ url('/home') }}">
                    <img alt="" border="0" src="{{asset('img/transred-logob.png')}}" />
                </a>
                  &nbsp;&nbsp;&nbsp;<button type="button" id="sidebarCollapse" class="btn btn-success" style="background-color:##43bbc3; border-color:##43bbc3;">
                        <i class="fas fa-align-left"></i>
                        <span>Menú</span>
                    </button> 
                    &nbsp;&nbsp;&nbsp;<label style="color: white; font-size: 14px" align="left">
                  Fundación EC
              </label>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="nav navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('login') }}" style="color: white;">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                          <!--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                        
                       
                            <li class="nav-item dropdown">
      <label style="font-size: 13px; float: left; color: white;">
                            {{ Auth::user()->name." | ".date("d-m-Y") }}
                            </label>
                            <br>
                            <a id="navbarDropdown" class="btn btn-danger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: white; font-size: 14px">
                                    <i class="fas fa-sign-out-alt"></i>
                        <span>Cerrar Sesión</span>
                                   
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    </div>
                </div>
            </nav>

         <main class="py-4" style="background-color: white;">
            @yield('content')
        </main>
        </div>
    </div>

    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>