@extends('index')
@section('content')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">OPERATIVOS</h3>
            <a href="{{route('operativosNuevo')}}" class="btn btn-primary pull-right" > <span class=" fa fa-plus"></span> </a>
        </div>

        <div class="col-xs-12">
            @include('operativos.operativos_table')

        </div>

    </div>
@endsection
@stop