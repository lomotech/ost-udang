@extends('layouts.app')

@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit XrefCountry</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($xrefCountry, ['route' => ['xrefCountries.update', $xrefCountry->id], 'method' => 'patch']) !!}

            @include('xrefCountries.fields')

            {!! Form::close() !!}
        </div>
@endsection
