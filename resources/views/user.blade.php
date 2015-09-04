@extends('index')
@section('page-inner')

    <div class="panel panel-white">
    <div class="panel-heading clearfix">
        <h4 class="panel-title">Basic example</h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            @include('controls.table')
        </div>
    </div>
    </div>

@endsection
@stop