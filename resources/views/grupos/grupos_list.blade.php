@extends('index')
@section('content')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">GRUPOS</h3>
            <a href="{{route('gruposNuevo')}}" class="btn btn-primary pull-right" title="Nuevo grupo"> <span class=" fa fa-plus"></span> </a>
        </div>

        <div class="col-xs-12">
            @include('Grupos.grupos_table')
            @include('Grupos.partials.modal')
        </div>

    </div>
@endsection
@stop