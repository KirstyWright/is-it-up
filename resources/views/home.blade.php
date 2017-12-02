@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Your Organisations</h3>
        @foreach ($organisations as $organisation)
            <p>{{ Html::linkAction('OrganisationController@show', $organisation->name , array($organisation->id)) }}</p>
        @endforeach
        <hr>
        <h4>Create new Organisation</h4>
        {!! Form::open(['action' => 'OrganisationController@store','method'=>'post']) !!}
            {{ Form::label('name', 'Organisation Name') }}
            {{ Form::text('name') }}
            {{ Form::submit('Create') }}
        {!! Form::close() !!}
    </div>
</div>
@endsection
