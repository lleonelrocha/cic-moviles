@extends('index')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">PERSONAL</h3>
        </div>
        @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class=" col-xs-12 alert alert-success" >{{$error}}</div>
            @endforeach
        @endif

        <div class="col-xs-12">
            @if(isset($model))
                {!! Form::model($model,['route'=>['personasPostEdit',$model->id]]) !!}
            @else
                {!! Form::open(['route'=>'personasPostNuevo']) !!}
            @endif
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre', null ,  array('class'=>'form-control')) !!}

                {!! Form::label('apellido', 'Apellido') !!}
                {!! Form::text('apellido', null ,  array('class'=>'form-control')) !!}

                {!! Form::label('telefono1', 'Telefono 1') !!}
                {!! Form::text('telefono1', null ,  array('class'=>'form-control')) !!}

                {!! Form::label('telefono2', 'Telefono 2') !!}
                {!! Form::text('telefono2', null ,  array('class'=>'form-control')) !!}

                {!! Form::label('email', 'Email :') !!}
                {!! Form::text('mail', null ,  array('class'=>'form-control')) !!}
                @if(empty($model))
                    {!! Form::label('funcion', 'Funcion :') !!}
                    {!! Form::select('funcion_id',(['' => 'Seleccionar funcion'] + $funcion->toArray()), null, ['id' => 'funcion_id', 'class' => 'form-control']) !!}
                @else
                    {!! Form::label('funcion', 'Funcion :') !!}
                    {!! Form::select('funcion_id',['' => 'Seleccionar funcion'] + $funcion->toArray()  ,$model->Funcion->lists('id')->toArray(), ['id' => 'funcion_id', 'class' => 'form-control']) !!}



                @endif

                {!! '<br>'!!}

            {!! Form::submit('Aceptar', array('class'=>'btn btn-primary'))!!}
            {!! Form::close()!!}
        </div>
    </div>

@endsection
@stop