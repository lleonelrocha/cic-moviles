
    <table class="table table-striped table-bordered table-hover" id="dataTable">
        <thead>
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($model as $dispositivo)
                <tr>
                    <td style="width: 5%;">{{$dispositivo->id}}</td>
                    <td>{{$dispositivo->codigo}}</td>
                    <td>{{$dispositivo->descripcion}}</td>
                    <td style="width: 10%;">
                        <div class=" btn-group ">
                            <a href="{{route('dispositivoEdit',$dispositivo->id)}}" class="btn btn-xs btn-primary"><span class="fa fa-pencil"></span></a>
                            <a href="{{route('dispositivosDelete',$dispositivo->id)}}" class="delete btn btn-xs btn-primary"><span class="fa fa-minus"></span></a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
