@extends('layout')

@section('title')
    Short Link
@stop

@section('button')
@stop

@section('content')
    @if (isset($auth_errors))
        <div class="column is-4 is-offset-4">
            <div class="notification is-info">
                {{$auth_errors}}
            </div>
        </div>
    @endif

    <form class="form-horizontal" method="post" action="">
        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Name</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="FullName" name="name"
                        @if(isset($name))
                        value="{{$name}}"
                       @endif >
            </div>
            <div style="color: red">
                {{ $errors->first('name'); }}
            </div>
        </div>

        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Email</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="email" name="email"
                @if(isset($email))
                   value="{{$email}}"
                @endif>
            </div>
            <div style="color: red">
                {{ $errors->first('email'); }}
            </div>
        </div>

        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Password</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="password" name="password">
            </div>
            <div style="color: red">
                {{ $errors->first('password'); }}
            </div>
        </div>

        <div class="form-group">
            <label for="FullName" class="col-sm-2 control-label">Confirm password</label>
            <div class=" col-md-5">
                <input type="text" class="form-control" id="confirmPassword" name="password_confirmation">
            </div>
            <div style="color: red">
                {{ $errors->first('password_confirmation'); }}
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2  col-md-5">
                <button type="submit" class="btn btn-success">register</button>
            </div>
        </div>
    </form>

@stop
