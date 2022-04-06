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
            <h1 class="h2" align="center">
                Oaxaca
            </h1>
            <h1 class="h2" align="center">
                Sierra Sur
            </h1>
            <br>
            <div align="center">
                <img src="{{asset('img/s_s.png')}}" width="50%" height="50%" />
                <br>
            </div>

        </div>
    </div>
</div>
@endsection