@extends('index')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">NUEVO OPERATIVO</h3>
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
            {!! Form::text('fecha_hasta', null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('nombre', 'Fecha final') !!}
                {!! Form::text('fecha_desde', null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('horarios', 'Horarios') !!}
                {!! Form::text('horarios', '', array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('nombre', 'Direccion') !!}
                {!! Form::text('direccion', null, array('class'=> 'form-control')) !!}
                <br>
                {!! Form::label('posicion', 'Posicion') !!}
                {!! Form::text('posicion', null, array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('detalle', 'Detalle') !!}
                {!! Form::text('detalle', null, array('class'=>'form-control')) !!}
                <br>


                {!! Form::submit('Aceptar')!!}
            {!! Form::close()!!}
        </div>

    </div>

@endsection
@stop