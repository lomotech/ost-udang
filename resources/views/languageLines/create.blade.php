@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Create New LanguageLine</h1>
        </div>
    </div>

    <div class="row">
        {!! Form::open(['route' => 'admin.languageLines.store']) !!}

            @include('languageLines.fields')

        {!! Form::close() !!}
    </div>
@endsection
