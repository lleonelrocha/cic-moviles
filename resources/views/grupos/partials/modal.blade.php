<!-- Modal -->
<div class="modal fade" id="verModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Agregar persona al grupo</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>'gruposAddPerson']) !!}
                {!!Form::label('Personal')!!}
                {!!Form::select('persona_id', $persona , null ,array('class'=>'form-control'))!!}

                {!!Form::label('Funcion')!!}
                {!!Form::select('funcion_id', $funcion  , null ,array('class'=>'form-control', 'id'=>'funcion_id'))!!}

                {!!Form::hidden('grupo_id', null ,array('class'=>'form-control', 'id'=>'grupo_id'))!!}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
            {!! Form::close()!!}
        </div>
    </div>
</div>