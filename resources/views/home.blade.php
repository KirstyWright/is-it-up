@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <h3>Your Organisations</h3>
                    @foreach ($organisations as $organisation)
                        <p>{{ Html::linkAction('Organisation@show', $organisation->name , array($organisation->id)) }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
