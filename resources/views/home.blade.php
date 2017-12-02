@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Your Sites</h3>
        @foreach ($organisations as $organisation)
            <p>{{ Html::linkAction('OrganisationController@show', $organisation->name , array($organisation->id)) }}</p>
            <ul>
                @foreach ($organisation->sites as $site)
                    <li>{{ Html::linkAction('SiteController@show', $site->name , array($site->id)) }}</li>
                @endforeach
            </ul>
        @endforeach
        <hr>
        <h4>Create new Organisation</h4>
        {!! Form::open(['action' => 'OrganisationController@store','method'=>'post']) !!}
            {{ Form::label('name', 'Organisation Name') }}
            {{ Form::text('name') }}
            {{ Form::submit('Create') }}
        {!! Form::close() !!}
        <h4>Create new Site</h4>
        <p>{{ Html::linkAction('SiteController@create') , 'Create a site'}}</p>
    </div>
</div>
@endsection
