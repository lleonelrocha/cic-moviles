@extends('index')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">FUNCION</h3>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class=" col-xs-12 alert alert-success" >{{$error}}</div>
            @endforeach
        @endif

        <div class="col-xs-12">
            @if(isset($model))
                {!! Form::model($model,['route'=>['funcionesPostEdit',$model->id]]) !!}
            @else
                {!! Form::open(['route'=>'funcionesPostNuevo']) !!}
            @endif
            {!! Form::label('funcion', 'Funcion') !!}
            {!! Form::text('funcion') !!}
            {!! '<br>'!!}
            {!! '<br>'!!}

            {!! Form::submit('Aceptar',array('class'=>'btn btn-primary'))!!}
            {!! Form::close()!!}
        </div>
    </div>

@endsection
@stop