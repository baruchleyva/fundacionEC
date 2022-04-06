@extends('layouts.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="flex-center position-ref full-height" style="background-color: ; ">
                        <div class="content">
                            <div align="center">
                                <img src="{{asset('img/libro.jpg')}}" align="center" height="50%" width="50%" class="responsive"/>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
