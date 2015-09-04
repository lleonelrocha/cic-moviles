@extends('index')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">GRUPOS</h3>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class=" col-xs-12 alert alert-success" >{{$error}}</div>
            @endforeach
        @endif

        <div class="col-xs-12">
            @if(isset($model))
                {!! Form::model($model,['route'=>['gruposPostEdit',$model->id]]) !!}
            @else
                {!! Form::open(['route'=>'gruposPostNuevo']) !!}
            @endif
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre') !!}
            {!! Form::submit('Aceptar')!!}
            {!! Form::close()!!}
        </div>

    </div>

@endsection
@stop