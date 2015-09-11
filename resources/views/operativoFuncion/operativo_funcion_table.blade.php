<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
    <tr>
        <th>#</th>

        <th>Funcion</th>

        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($model as $funcion)
        <tr>
            <td style="width: 5%;">{{ $funcion->id }}</td>
            <td>{{ $funcion->funcion }}</td>
            <td style="width: 10%;">
                <div class=" btn-group ">
                    <a href="{{route('operativo_funcionEdit',   $funcion->id)}}" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                    <a href="{{route('operativo_funcionDelete', $funcion->id)}}" class="delete btn btn-xs btn-primary"><span class="fa fa-minus"></span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>