@extends('index')

@section('content')
    @include('partials.messages')
    <div class="row">
        <div class="col-xs-12">
            <h3 class="page-header">PERSONAL</h3>
            <a href="{{route('personasNuevo')}}" class="btn btn-primary pull-right" > <span class=" fa fa-plus"></span> </a>
        </div>

        <div class="col-xs-12">
            @include('Personas.personas_table')
        </div>

    </div>
@endsection
@stop