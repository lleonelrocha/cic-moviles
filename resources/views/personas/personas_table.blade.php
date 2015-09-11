<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono1</th>
        <th>Telefono2</th>
        <th>Email</th>
        <th>Funcion</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($model as $persona)
        <tr>
            <td style="width: 5%;">{{$persona->id}}</td>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->telefono1}}</td>
            <td>{{$persona->telefono2}}</td>
            <td>{{$persona->mail}}</td>
            <td>
            @foreach($persona->Funcion as $funcion)
                {{$funcion->funcion}}
            @endforeach
            </td>
            <td style="width: 10%;">
                <div class=" btn-group ">
                    <a href="{{route('personasEdit',   $persona->id)}}" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                    <a href="{{route('personasDelete', $persona->id)}}" class="delete btn btn-xs btn-primary"><span class="fa fa-minus"></span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
