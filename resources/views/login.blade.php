@extends('template/template')

@section('main-content')

    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">CIC Mobiles</h3>
            </div>
            <div class="panel-body">

                    {!! Form::open(['route'=>'post_login']) !!}

                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Usuario" name="email"  autofocus>

                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">recordar mi cuenta
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Ingresar">
                            </fieldset>

                    {!! Form::close() !!}
            </div>
        </div>
    </div>

    @endsection

@stop