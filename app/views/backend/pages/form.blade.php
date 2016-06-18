@extends('backend.layouts.default')

@section('title'){{ $title }}@stop

@section('content')

    {{ Form::open() }}
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        {{ Form::label('fullname', trans('users.fullname').':') }}
                        <input type="text" name="fullname" id="fullname" class="form-control" value="@if(!empty($userData) && isset($userData->us_fullname)){{ $userData->us_fullname }}@endif" placeholder="{{ trans('users.fullname') }}">
                    </div>
                    <br/>
                    <div class="form-group">
                        {{ Form::label('email', trans('users.email').':') }}
                        @if(!empty($userData) && isset($userData->us_email))
                            {{ Form::text('email', $userData->us_email, array('class' => 'form-control', 'readonly')) }}
                        @else
                            {{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => trans('users.email'))) }}
                        @endif
                    </div>
                    <br/>
                    <div class="form-group">
                        {{ Form::label('password', trans('users.password').':') }}
                        {{ Form::password('password', array('class' => 'form-control', 'placeholder' => trans('users.password'))) }}
                    </div>
                    <br/>
                    <div class="form-group">
                        {{ Form::label('status', trans('common.status').':') }}
                        <select name="status" id="status" class="form-control">
                            <option value="1" @if(!isset($userData) || $userData->us_status == '1') checked @endif>{{ trans('common.active') }}</option>
                            <option value="0" @if(!empty($userData) && $userData->us_status == '0') checked @endif>{{ trans('common.deactive') }}</option>
                        </select>
                    </div>
                </div>
                <div class="box-footer">
                    @if(!empty($userData)){{ Form::hidden('userId', $userData->us_id) }}@endif
                    {{ Form::submit(trans('common.save'), array('class' => 'btn btn-primary')) }}
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}

@stop
