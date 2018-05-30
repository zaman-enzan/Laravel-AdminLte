@extends('layouts.auth')
@section('title', 'Reset Password') 
@section('content')
<div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>

    {!! Form::open(['url' => route('password.request')]) !!}

        {{ Form::hidden('token', $token) }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'autofocus' => 'autofocus', 'autocomplete' => 'off']) }}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required', 'autocomplete' => 'off']) }}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required', 'autocomplete' => 'off']) }}
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
            </div>
        </div>
    {!! Form::close() !!}

</div>
@endsection
