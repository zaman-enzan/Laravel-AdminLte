@extends('layouts.screen')
@section('title', 'Email Password Reset Link') 
@section('content')

<div class="login-box-body">
    <p class="login-box-msg">Reset Password</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    {!! Form::open(['url' => route('password.email')]) !!}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required', 'autofocus' => 'autofocus', 'autocomplete' => 'off']) }}

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Send Password Reset Link</button>
            </div>
        </div>
    {!! Form::close() !!}

</div>
@endsection
