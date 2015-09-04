@extends('template/template')
    @section('main-content')
        @include('template/navbar')

        <div id="page-wrapper">
            <div class="container-fluid">

            @yield('content')

            </div>
        </div>

    @endsection
@stop