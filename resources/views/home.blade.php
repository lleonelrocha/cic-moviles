@extends('index')
    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">OPERATIVOS ACTUALES</h3>
            </div>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Operativo</th>
                    <th>Estado</th>
                    <th>Reportes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($operativos as $operativo)
                    <tr>
                        <td>{{$operativo->fecha_desde}} <br> {{$operativo->fecha_hasta}}</td>
                        <td><a href='operativo/detalle/{{Crypt::encrypt($operativo->id)}}' >{{$operativo->detalle}}</a></td>
                        <td>{{$operativo->operativo_estado->estado or 'No Asignado'}}</td>
                        {{--<td><label class="badge"> {{$operativo->Parte->count()}} </label></td>--}}
                        <td><label class="badge"> 0 </label></td>

                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>

    @endsection
@stop