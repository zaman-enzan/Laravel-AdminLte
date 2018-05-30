@extends('layouts.app') 
@section('title', 'Change Password') 
@section('content')

        <div class="content-wrapper">
            <section class="content-header">
                <h1>Change Password
                    <small>it all starts here</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#">Profile</a></li>
                    <li class="active">Change password</li>
                </ol>
            </section>

            @include('layouts.message')

            <section class="content">
                <div class="box">

                    {!! Form::open(['url' => route('update.password'), 'class' => 'form-horizontal']) !!}
                        <div class="box-header with-border">
                            <h3 class="box-title">Update password</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                                        {{ Form::label('current_password', 'Current password', ['class' => 'col-sm-3 control-label']) }}

                                        <div class="col-sm-6">
                                            {{ Form::password('current_password', ['id' => 'current_password', 'class' => 'form-control', 'required' => 'required', 'minlength' => 6, 'autofocus' => 'autofocus', 'autocomplete' => 'off']) }}

                                            @if($errors->has('current_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('current_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                                        {{ Form::label('new_password', 'New Password', ['class' => 'col-sm-3 control-label']) }}

                                        <div class="col-sm-6">
                                            {{ Form::password('new_password', ['id' => 'new_password', 'class' => 'form-control', 'required' => 'required', 'minlength' => 6, 'autocomplete' => 'off']) }}

                                            @if($errors->has('new_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                                        {{ Form::label('confirm_password', 'Confirm Password', ['class' => 'col-sm-3 control-label']) }}

                                        <div class="col-sm-6">
                                            {{ Form::password('confirm_password', ['id' => 'confirm_password', 'class' => 'form-control', 'required' => 'required', 'minlength' => 6, 'autocomplete' => 'off']) }}

                                            @if($errors->has('confirm_password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('confirm_password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer text-center">
                            <button type="submit" class="btn bg-purple btn-flat">Reset</button>
                        </div>
                    {!! Form::close() !!}
                </div>

            </section>
        </div>

@endsection