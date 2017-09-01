@extends('layout')

@section('title')
    Log in
@stop

@section('button')
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="field is-grouped">
                <p class="control">
                    <a class="button is-primary" href="{{URL::to('auth/registr')}}">
                        <span class="icon">
                            <i class="fa fa-address-card"></i>
                        </span>
                        <span>
                            Register me
                        </span>
                    </a>
                </p>
            </div>
        </div>
    </div>
@stop
@section('content')

    <form class="form-horizontal" method="post" action="{{URL::to('auth/login')}}">

        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Email</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="email" name="email" value="{{Session::get('email')}}">
            </div>
            <div style="color: red">
                @if(isset($auth_errors))
                    {{$auth_errors}}
                    @endif
                {{ $errors->first('email'); }}
            </div>

        </div>

        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Password</label>
            <div class=" col-md-5">
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div style="color: red">

                {{ $errors->first('password'); }}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2  col-md-5">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </div>
    </form>

@stop

