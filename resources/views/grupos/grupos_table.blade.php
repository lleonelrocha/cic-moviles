<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
    <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Persona</th>
        <th>Funcion</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($model as $grupo)
        <tr>
            <td style="width: 5%;">{{$grupo->id}}</td>
            <td>{{$grupo->nombre}}</td>

            @foreach($grupo->GruposPersona as $persona)

            @endforeach
            <td style="width: 10%;">
                <div class=" btn-group ">
                    <a  class="btn btn-xs btn-primary" id="verModalId" data-toggle="modal" data-target="#verModal "><span class="glyphicon glyphicon-user"></span></a>
                    <a href="{{ route('gruposDelete', $grupo->id) }}" class="delete btn btn-xs btn-primary"><span class="fa fa-minus"></span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>