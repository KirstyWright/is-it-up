@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Create new Site</h4>
        {!! Form::open(['action' => 'SiteController@store','method'=>'post']) !!}
            <div class="form-group">
                {{ Form::label('name', 'Site Name') }}
                {{ Form::text('name') }}
            </div>
            <div class="form-group">
                {{ Form::label('url', 'Site Url') }}
                {{ Form::text('url') }}
            </div>
            <div class="form-group">
                {{ Form::select('organisation_name', $organisationNames, null, ['placeholder' => 'Select an organisation']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Create') }}
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
