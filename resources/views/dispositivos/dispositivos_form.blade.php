@extends('index')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">DISPOSITIVOS</h3>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class=" col-xs-12 alert alert-success" >{{$error}}</div>
            @endforeach
        @endif

        <div class="col-xs-12">
            @if(isset($model))
                {!! Form::model($model,['route'=>['dispositivosPostEdit',$model->id]]) !!}
            @else
                {!! Form::open(['route'=>'dispositivosPostNuevo']) !!}
            @endif
                {!! Form::label('Codigo','codigo') !!}
                {!! Form::text('codigo', null ,  array('class'=>'form-control')) !!}
                <br>
                {!! Form::label('Descripcion','descripcion') !!}
                {!! Form::text('descripcion', null ,  array('class'=>'form-control')) !!}
                <br>
                {!! Form::submit('Aceptar')!!}
            {!! Form::close()!!}
        </div>
    </div>

@endsection
@stop