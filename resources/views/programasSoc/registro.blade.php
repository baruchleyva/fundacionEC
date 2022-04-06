@extends('layouts.menu')
@section('content')

@if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {!! Session::get('message') !!}
        </div>
    @endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <br>
            <h1 align="center">
                Programas Sociales - Registro
            </h1>
            <br>
            <div align="center">
                <img src="{{asset('img/form.png')}}"/>
                <br>
            </div>

        </div>
    </div>
</div>
@endsection