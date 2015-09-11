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
                {!! Form::model($model,['route'=>['operativo_funcionPostEdit',$model->id]]) !!}
            @else
                {!! Form::open(['route'=>'operativo_funcionPostNuevo']) !!}
            @endif
            {!! Form::text('codigo') !!}
            {!! Form::text('descripcion') !!}

            {!! Form::submit('Aceptar')!!}
            {!! Form::close()!!}
        </div>
    </div>

@endsection
@stop