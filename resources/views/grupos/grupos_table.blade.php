@foreach($model as $grupo)
    <div class="row">
        <div class="col-md-2">
            {{$grupo->nombre}}
         <a href="#" class="glyphicon glyphicon-user" id="verModalId" data-toggle="modal" data-target="#verModal" data-grupo="{{$grupo->id}}" data-nombre="{{$grupo->nombre}}" title="Agregar persona"></a>
        </div>
        <div class="col-md-10">
             @if(count($grupo->GruposPersona)==0)
                <div class="col-md-6">Sin persona asignada</div>
             @endif
                 @foreach($grupo->GruposPersona as $persona)
                     <div class="col-md-4">{{$persona->Persona->nombre}}</div>
                     <div class="col-md-3">{{$persona->Funcion->funcion}}</div>
                     <div class="col-md-3"><a href="{{route("gruposGetDeletePerson", $persona->id)}}" class="delete ">x</a></div>
                 @endforeach
            <a href="{{route("gruposDelete", $grupo->id)}}" class="delete "  >Eliminar grupo</a>
        </div>
    </div>
    <hr>
@endforeach
