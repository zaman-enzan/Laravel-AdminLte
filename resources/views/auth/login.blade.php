@extends('layouts.auth')

@section('content')
<div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    {!! Form::open(['url' => 'login']) !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'autofocus' => 'autofocus']) }}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required']) }}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="login-forgot-password">
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
        </div>
    {!! Form::close() !!}

</div>
@endsection
