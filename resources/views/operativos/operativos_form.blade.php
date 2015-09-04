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
                {!! Form::open(['route'=>'operativosPostNuevo']) !!}
            @endif
            {!! Form::label('nombre', 'Fecha comienzo') !!}
            {!! Form::text('fecha_hasta') !!}
                <br>
                <br>
                {!! Form::label('nombre', 'Fecha final') !!}
                {!! Form::text('fecha_desde') !!}
                <br>
                <br>
                {!! Form::label('horarios', 'Horarios') !!}
                {!! Form::text('horarios') !!}
                <br>
                <br>
                {!! Form::label('nombre', 'Direccion') !!}
                {!! Form::text('direccion') !!}
                <br>
                <br>
                {!! Form::label('posicion', 'Posicion') !!}
                {!! Form::text('posicion') !!}
                <br>
                <br>
                {!! Form::label('detalle', 'Detalle') !!}
                {!! Form::text('detalle') !!}
                <br>
                <br>
            {!! Form::submit('Aceptar')!!}
            {!! Form::close()!!}
        </div>

    </div>

@endsection
@stop