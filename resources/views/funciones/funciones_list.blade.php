@extends('index')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">FUNCIONES</h3>
            <a href="{{route('funcionesNuevo')}}" class="btn btn-primary pull-right" > <span class=" fa fa-plus"></span> </a>
        </div>

        <div class="col-xs-12">
            @include('funciones.funciones_table')
        </div>

    </div>
@endsection
@stop