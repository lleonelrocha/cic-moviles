@extends('index')
    @section('content')
        @include('partials.messages')
        <div class="row">
            <div class="col-xs-12">
                <h3 class="page-header">DISPOSITIVOS</h3>
                <a href="{{route('dispositivosNuevo')}}" class="btn btn-primary pull-right" > <span class=" fa fa-plus"></span> </a>
            </div>

            <div class="col-xs-12">
                @include('Dispositivos.dispositivos_table')
            </div>

        </div>
    @endsection
@stop