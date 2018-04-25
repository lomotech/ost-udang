@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit LanguageLine</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($languageLine, ['route' => ['languageLines.update', $languageLine->id], 'method' => 'patch']) !!}

            @include('languageLines.fields')

            {!! Form::close() !!}
        </div>
@endsection
