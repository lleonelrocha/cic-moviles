<table class="table table-striped table-bordered table-hover" id="dataTable">
    <thead>
    <tr>
        <th>#</th>
        <th>Desde</th>
        <th>Hasta</th>
        <th>Horarios</th>
        <th>Direccion</th>
        <th>Posicion</th>
        <th>Detalle</th>

        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($model as $operativo)
        <tr>
            <td style="width: 5%;">{{$operativo->id}}</td>
            <td>{{$operativo->fecha_desde}}</td>
            <td>{{$operativo->fecha_hasta}}</td>
            <td>{{$operativo->horarios}}</td>
            <td>{{$operativo->direccion}}</td>
            <td>{{$operativo->posicion}}</td>
            <td>{{$operativo->detalle}}</td>

            {{--@foreach($grupo as $grupo_persona)--}}
            {{--@endforeach--}}
            <td style="width: 10%;">
                <div class=" btn-group ">
                    <a href="{{route('operativosDelete', $operativo->id)}}" class="delete btn btn-xs btn-primary"><span class="fa fa-minus"></span></a>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>