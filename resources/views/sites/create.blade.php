@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h4>Create new Site</h4>
        {!! Form::open(['action' => 'SiteController@store','method'=>'post']) !!}
            {{ Form::label('name', 'Site Name') }}
            {{ Form::text('name') }}
            {{ Form::label('url', 'Site Url') }}
            {{ Form::text('url') }}
            {{ Form::hidden('organisation_id',$organisation->id) }}
            {{ Form::submit('Create') }}
        {!! Form::close() !!}
    </div>
</div>
@endsection
